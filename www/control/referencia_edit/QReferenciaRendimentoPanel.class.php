<?php
	class QReferenciaRendimentoPanel extends QPanel {
	
		public $lstMolde;
		public $lstTecido;
		public $txtComprimento;
		public $txtPecas;
		public $btnSave;
		public $btnDelete;
		
		public $objReferenciaRendimento;
		
		public function __construct($objParentObject, $strControlId = null, ReferenciaRendimento $objReferenciaRendimento) {
			parent::__construct($objParentObject, $strControlId);
			$this->objReferenciaRendimento = $objReferenciaRendimento;
			$this->Template = __DOCROOT__.'/control/referencia_edit/tpl/QReferenciaRendimentoPanel.tpl.php';

			$this->lstMolde_Crete();
			$this->lstTecido_Create();
			$this->txtComprimento_Create();
			$this->txtPecas_Create();
			$this->btnSave_Create();
			$this->btnDelete_Create();
		}
		
		protected function lstMolde_Crete(){
			$this->lstMolde = new QListBox($this);
			$this->lstMolde->Name = 'TIPO DE MOLDE';
			$this->lstMolde->CssClass = 'form-control input-lg';
			$this->lstMolde->AddItem('SELECIONAR UM MOLDE ==>');
			foreach(Molde::LoadAll(QQ::Clause(QQ::OrderBy(QQN::Molde()->Nome))) as $objMolde)
				if($this->objReferenciaRendimento->MoldeId == $objMolde->Id) 
					$this->lstMolde->AddItem($objMolde->Nome, $objMolde->Id, true);
				else
					$this->lstMolde->AddItem($objMolde->Nome, $objMolde->Id);			
		}
		
		protected function txtComprimento_Create(){
			$this->txtComprimento = new QFloatTextBox($this);
			$this->txtComprimento->Name = 'COMPRIMENTO EM METROS';
			$this->txtComprimento->Required = true;
			$this->txtComprimento->CssClass = 'form-control input-lg';
			$this->txtComprimento->Text = $this->objReferenciaRendimento->Comprimento;
		}
		
		protected function txtPecas_Create(){
			$this->txtPecas = new QIntegerTextBox($this);
			$this->txtPecas->Name = 'NÚMERO DE PEÇAS';
			$this->txtPecas->Minimum = 1;
			$this->txtPecas->Required = true;
			$this->txtPecas->CssClass= 'form-control input-lg';
			$this->txtPecas->Text = $this->objReferenciaRendimento->Pecas;
		}
		
		protected function lstTecido_Create(){
			$this->lstTecido = new QListBox($this);
			$this->lstTecido->Name = 'TIPO DE TECIDO';
			$this->lstTecido->Required = true;
			$this->lstTecido->CssClass = 'form-control input-lg';
			$this->lstTecido->AddItem('SELECIONAR UM TECIDO ==>');
			
			foreach (Tecido::QueryArray(QQ::GreaterThan(QQN::Tecido()->Metro, 0), QQ::Clause(QQ::OrderBy(QQN::Tecido()->Nome))) as $objTecido)
				if($this->objReferenciaRendimento->TecidoId == $objTecido->Id || (!$this->objReferenciaRendimento->TecidoId && $objTecido->Id == $this->Form->Get_lstTecido()->SelectedValue)) 
					$this->lstTecido->AddItem($objTecido->Nome, $objTecido->Id, true);
				else
					$this->lstTecido->AddItem($objTecido->Nome, $objTecido->Id);
		}
		
		protected function btnSave_Create(){
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = 'CALCULAR PESO';
			$this->btnSave->CssClass = 'btn btn-default btn-lg width100';
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;
		}
		
		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			$this->objReferenciaRendimento->Peso = ($this->txtComprimento->Text/Tecido::Load($this->lstTecido->SelectedValue)->Metro)/$this->txtPecas->Text;
			$this->Refresh();
		}
		
		protected function btnDelete_Create(){
			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = 'REMOVER';
			$this->btnDelete->CssClass = 'btn btn-danger btn-lg width100';
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
		}
		
		public function btnDelete_Click($strFormId, $strControlId, $strParameter){
			$this->Form->RemoveReferenciaRendimento($this->objReferenciaRendimento);
			$this->ParentControl->RemoveChildControl($this->ControlId, true);
		}
		
		public function SaveReferenciaRendimento(Referencia $objReferencia){
			$this->objReferenciaRendimento->MoldeId = $this->lstMolde->SelectedValue;
			$this->objReferenciaRendimento->TecidoId = $this->lstTecido->SelectedValue;
			$this->objReferenciaRendimento->Comprimento = $this->txtComprimento->Text;
			$this->objReferenciaRendimento->Pecas = $this->txtPecas->Text;
			$this->objReferenciaRendimento->ReferenciaId = $objReferencia->Id;
			$this->objReferenciaRendimento->Peso = ($this->txtComprimento->Text/Tecido::Load($this->lstTecido->SelectedValue)->Metro)/$this->txtPecas->Text;
			$this->objReferenciaRendimento->Preco = $this->objReferenciaRendimento->Tecido->Preco*$this->objReferenciaRendimento->Peso;
			$this->objReferenciaRendimento->Save();
		}
		
		public function GetTitle(){
			if($this->objReferenciaRendimento->Peso)
				return number_format ($this->objReferenciaRendimento->Peso, 3).' Kg';
			else
				return 'N/A';
		}
		
		public function UpdateObjectFromControl(){
			$this->objReferenciaRendimento->MoldeId = $this->lstMolde->SelectedValue;
			$this->objReferenciaRendimento->TecidoId = $this->lstTecido->SelectedValue;
			$this->objReferenciaRendimento->Comprimento = $this->txtComprimento->Text;
			$this->objReferenciaRendimento->Pecas = $this->txtPecas->Text;
		}

	}
?>