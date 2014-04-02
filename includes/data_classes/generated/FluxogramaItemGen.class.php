<?php
	/**
	 * The abstract FluxogramaItemGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FluxogramaItem subclass which
	 * extends this FluxogramaItemGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FluxogramaItem class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $ReferenciaId the value for intReferenciaId (Not Null)
	 * @property integer $Ordenacao the value for intOrdenacao (Not Null)
	 * @property integer $FluxogramaAcoesId the value for intFluxogramaAcoesId 
	 * @property integer $MaquinaId the value for intMaquinaId 
	 * @property integer $Tempo the value for intTempo 
	 * @property boolean $Ativo the value for blnAtivo (Not Null)
	 * @property Referencia $Referencia the value for the Referencia object referenced by intReferenciaId (Not Null)
	 * @property FluxogramaAcoes $FluxogramaAcoes the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
	 * @property Maquina $Maquina the value for the Maquina object referenced by intMaquinaId 
	 * @property BalancoAcoes $_BalancoAcoes the value for the private _objBalancoAcoes (Read-Only) if set due to an expansion on the balanco_acoes.fluxograma_item_id reverse relationship
	 * @property BalancoAcoes[] $_BalancoAcoesArray the value for the private _objBalancoAcoesArray (Read-Only) if set due to an ExpandAsArray on the balanco_acoes.fluxograma_item_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FluxogramaItemGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fluxograma_item.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.referencia_id
		 * @var integer intReferenciaId
		 */
		protected $intReferenciaId;
		const ReferenciaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.ordenacao
		 * @var integer intOrdenacao
		 */
		protected $intOrdenacao;
		const OrdenacaoDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.fluxograma_acoes_id
		 * @var integer intFluxogramaAcoesId
		 */
		protected $intFluxogramaAcoesId;
		const FluxogramaAcoesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.maquina_id
		 * @var integer intMaquinaId
		 */
		protected $intMaquinaId;
		const MaquinaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.tempo
		 * @var integer intTempo
		 */
		protected $intTempo;
		const TempoDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.ativo
		 * @var boolean blnAtivo
		 */
		protected $blnAtivo;
		const AtivoDefault = null;


		/**
		 * Private member variable that stores a reference to a single BalancoAcoes object
		 * (of type BalancoAcoes), if this FluxogramaItem object was restored with
		 * an expansion on the balanco_acoes association table.
		 * @var BalancoAcoes _objBalancoAcoes;
		 */
		private $_objBalancoAcoes;

		/**
		 * Private member variable that stores a reference to an array of BalancoAcoes objects
		 * (of type BalancoAcoes[]), if this FluxogramaItem object was restored with
		 * an ExpandAsArray on the balanco_acoes association table.
		 * @var BalancoAcoes[] _objBalancoAcoesArray;
		 */
		private $_objBalancoAcoesArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.referencia_id.
		 *
		 * NOTE: Always use the Referencia property getter to correctly retrieve this Referencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Referencia objReferencia
		 */
		protected $objReferencia;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.fluxograma_acoes_id.
		 *
		 * NOTE: Always use the FluxogramaAcoes property getter to correctly retrieve this FluxogramaAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaAcoes objFluxogramaAcoes
		 */
		protected $objFluxogramaAcoes;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.maquina_id.
		 *
		 * NOTE: Always use the Maquina property getter to correctly retrieve this Maquina object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Maquina objMaquina
		 */
		protected $objMaquina;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a FluxogramaItem from PK Info
		 * @param integer $intId
		 * @return FluxogramaItem
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FluxogramaItem::QuerySingle(
				QQ::Equal(QQN::FluxogramaItem()->Id, $intId)
			);
		}

		/**
		 * Load all FluxogramaItems
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadAll query
			try {
				return FluxogramaItem::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FluxogramaItems
		 * @return int
		 */
		public static function CountAll() {
			// Call FluxogramaItem::QueryCount to perform the CountAll query
			return FluxogramaItem::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Create/Build out the QueryBuilder object with FluxogramaItem-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fluxograma_item');
			FluxogramaItem::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fluxograma_item');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single FluxogramaItem object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItem the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FluxogramaItem object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FluxogramaItem::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return FluxogramaItem::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FluxogramaItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItem[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FluxogramaItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of FluxogramaItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'fluxograma_item_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FluxogramaItem-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FluxogramaItem::GetSelectFields($objQueryBuilder);
				FluxogramaItem::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return FluxogramaItem::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FluxogramaItem
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fluxograma_item';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'referencia_id', $strAliasPrefix . 'referencia_id');
			$objBuilder->AddSelectItem($strTableName, 'ordenacao', $strAliasPrefix . 'ordenacao');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_acoes_id', $strAliasPrefix . 'fluxograma_acoes_id');
			$objBuilder->AddSelectItem($strTableName, 'maquina_id', $strAliasPrefix . 'maquina_id');
			$objBuilder->AddSelectItem($strTableName, 'tempo', $strAliasPrefix . 'tempo');
			$objBuilder->AddSelectItem($strTableName, 'ativo', $strAliasPrefix . 'ativo');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FluxogramaItem from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FluxogramaItem::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItem
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'fluxograma_item__';


				$strAlias = $strAliasPrefix . 'balancoacoes__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objBalancoAcoesArray)) {
						$objPreviousChildItem = $objPreviousItem->_objBalancoAcoesArray[$intPreviousChildItemCount - 1];
						$objChildItem = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objBalancoAcoesArray[] = $objChildItem;
					} else
						$objPreviousItem->_objBalancoAcoesArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'fluxograma_item__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the FluxogramaItem object
			$objToReturn = new FluxogramaItem();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_id'] : $strAliasPrefix . 'referencia_id';
			$objToReturn->intReferenciaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordenacao', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordenacao'] : $strAliasPrefix . 'ordenacao';
			$objToReturn->intOrdenacao = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_acoes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_acoes_id'] : $strAliasPrefix . 'fluxograma_acoes_id';
			$objToReturn->intFluxogramaAcoesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'maquina_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'maquina_id'] : $strAliasPrefix . 'maquina_id';
			$objToReturn->intMaquinaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempo'] : $strAliasPrefix . 'tempo';
			$objToReturn->intTempo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ativo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ativo'] : $strAliasPrefix . 'ativo';
			$objToReturn->blnAtivo = $objDbRow->GetColumn($strAliasName, 'Bit');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'fluxograma_item__';

			// Check for Referencia Early Binding
			$strAlias = $strAliasPrefix . 'referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FluxogramaAcoes Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_acoes_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaAcoes = FluxogramaAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_acoes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Maquina Early Binding
			$strAlias = $strAliasPrefix . 'maquina_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMaquina = Maquina::InstantiateDbRow($objDbRow, $strAliasPrefix . 'maquina_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for BalancoAcoes Virtual Binding
			$strAlias = $strAliasPrefix . 'balancoacoes__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objBalancoAcoesArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBalancoAcoes = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of FluxogramaItems from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItem[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FluxogramaItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FluxogramaItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FluxogramaItem object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FluxogramaItem next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return FluxogramaItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FluxogramaItem object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FluxogramaItem
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FluxogramaItem::QuerySingle(
				QQ::Equal(QQN::FluxogramaItem()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByFluxogramaAcoesId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesId, $intFluxogramaAcoesId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @return int
		*/
		public static function CountByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByFluxogramaAcoesId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesId, $intFluxogramaAcoesId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by MaquinaId Index(es)
		 * @param integer $intMaquinaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByMaquinaId($intMaquinaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByMaquinaId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->MaquinaId, $intMaquinaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by MaquinaId Index(es)
		 * @param integer $intMaquinaId
		 * @return int
		*/
		public static function CountByMaquinaId($intMaquinaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByMaquinaId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->MaquinaId, $intMaquinaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByReferenciaId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByReferenciaId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by ReferenciaId, Ativo Index(es)
		 * @param integer $intReferenciaId
		 * @param boolean $blnAtivo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByReferenciaIdAtivo($intReferenciaId, $blnAtivo, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByReferenciaIdAtivo query
			try {
				return FluxogramaItem::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
					QQ::Equal(QQN::FluxogramaItem()->Ativo, $blnAtivo)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by ReferenciaId, Ativo Index(es)
		 * @param integer $intReferenciaId
		 * @param boolean $blnAtivo
		 * @return int
		*/
		public static function CountByReferenciaIdAtivo($intReferenciaId, $blnAtivo, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByReferenciaIdAtivo query
			return FluxogramaItem::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
				QQ::Equal(QQN::FluxogramaItem()->Ativo, $blnAtivo)
				)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this FluxogramaItem
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fluxograma_item` (
							`referencia_id`,
							`ordenacao`,
							`fluxograma_acoes_id`,
							`maquina_id`,
							`tempo`,
							`ativo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
							' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							' . $objDatabase->SqlVariable($this->intMaquinaId) . ',
							' . $objDatabase->SqlVariable($this->intTempo) . ',
							' . $objDatabase->SqlVariable($this->blnAtivo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fluxograma_item', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fluxograma_item`
						SET
							`referencia_id` = ' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							`ordenacao` = ' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
							`fluxograma_acoes_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							`maquina_id` = ' . $objDatabase->SqlVariable($this->intMaquinaId) . ',
							`tempo` = ' . $objDatabase->SqlVariable($this->intTempo) . ',
							`ativo` = ' . $objDatabase->SqlVariable($this->blnAtivo) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this FluxogramaItem
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FluxogramaItem with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FluxogramaItems
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`');
		}

		/**
		 * Truncate fluxograma_item table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fluxograma_item`');
		}

		/**
		 * Reload this FluxogramaItem from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FluxogramaItem object.');

			// Reload the Object
			$objReloaded = FluxogramaItem::Load($this->intId);

			// Update $this's local variables to match
			$this->ReferenciaId = $objReloaded->ReferenciaId;
			$this->intOrdenacao = $objReloaded->intOrdenacao;
			$this->FluxogramaAcoesId = $objReloaded->FluxogramaAcoesId;
			$this->MaquinaId = $objReloaded->MaquinaId;
			$this->intTempo = $objReloaded->intTempo;
			$this->blnAtivo = $objReloaded->blnAtivo;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_item` (
					`id`,
					`referencia_id`,
					`ordenacao`,
					`fluxograma_acoes_id`,
					`maquina_id`,
					`tempo`,
					`ativo`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
					' . $objDatabase->SqlVariable($this->intOrdenacao) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
					' . $objDatabase->SqlVariable($this->intMaquinaId) . ',
					' . $objDatabase->SqlVariable($this->intTempo) . ',
					' . $objDatabase->SqlVariable($this->blnAtivo) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intId
		 * @return FluxogramaItem[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM fluxograma_item WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FluxogramaItem::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FluxogramaItem[]
		 */
		public function GetJournal() {
			return FluxogramaItem::GetJournalForId($this->intId);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for intId (Read-Only PK)
					// @return integer
					return $this->intId;

				case 'ReferenciaId':
					// Gets the value for intReferenciaId (Not Null)
					// @return integer
					return $this->intReferenciaId;

				case 'Ordenacao':
					// Gets the value for intOrdenacao (Not Null)
					// @return integer
					return $this->intOrdenacao;

				case 'FluxogramaAcoesId':
					// Gets the value for intFluxogramaAcoesId 
					// @return integer
					return $this->intFluxogramaAcoesId;

				case 'MaquinaId':
					// Gets the value for intMaquinaId 
					// @return integer
					return $this->intMaquinaId;

				case 'Tempo':
					// Gets the value for intTempo 
					// @return integer
					return $this->intTempo;

				case 'Ativo':
					// Gets the value for blnAtivo (Not Null)
					// @return boolean
					return $this->blnAtivo;


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Gets the value for the Referencia object referenced by intReferenciaId (Not Null)
					// @return Referencia
					try {
						if ((!$this->objReferencia) && (!is_null($this->intReferenciaId)))
							$this->objReferencia = Referencia::Load($this->intReferenciaId);
						return $this->objReferencia;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoes':
					// Gets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
					// @return FluxogramaAcoes
					try {
						if ((!$this->objFluxogramaAcoes) && (!is_null($this->intFluxogramaAcoesId)))
							$this->objFluxogramaAcoes = FluxogramaAcoes::Load($this->intFluxogramaAcoesId);
						return $this->objFluxogramaAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Maquina':
					// Gets the value for the Maquina object referenced by intMaquinaId 
					// @return Maquina
					try {
						if ((!$this->objMaquina) && (!is_null($this->intMaquinaId)))
							$this->objMaquina = Maquina::Load($this->intMaquinaId);
						return $this->objMaquina;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_BalancoAcoes':
					// Gets the value for the private _objBalancoAcoes (Read-Only)
					// if set due to an expansion on the balanco_acoes.fluxograma_item_id reverse relationship
					// @return BalancoAcoes
					return $this->_objBalancoAcoes;

				case '_BalancoAcoesArray':
					// Gets the value for the private _objBalancoAcoesArray (Read-Only)
					// if set due to an ExpandAsArray on the balanco_acoes.fluxograma_item_id reverse relationship
					// @return BalancoAcoes[]
					return (array) $this->_objBalancoAcoesArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'ReferenciaId':
					// Sets the value for intReferenciaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferencia = null;
						return ($this->intReferenciaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ordenacao':
					// Sets the value for intOrdenacao (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intOrdenacao = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoesId':
					// Sets the value for intFluxogramaAcoesId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaAcoes = null;
						return ($this->intFluxogramaAcoesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaquinaId':
					// Sets the value for intMaquinaId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objMaquina = null;
						return ($this->intMaquinaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tempo':
					// Sets the value for intTempo 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTempo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ativo':
					// Sets the value for blnAtivo (Not Null)
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnAtivo = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Sets the value for the Referencia object referenced by intReferenciaId (Not Null)
					// @param Referencia $mixValue
					// @return Referencia
					if (is_null($mixValue)) {
						$this->intReferenciaId = null;
						$this->objReferencia = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Referencia object
						try {
							$mixValue = QType::Cast($mixValue, 'Referencia');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Referencia object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Referencia for this FluxogramaItem');

						// Update Local Member Variables
						$this->objReferencia = $mixValue;
						$this->intReferenciaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FluxogramaAcoes':
					// Sets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
					// @param FluxogramaAcoes $mixValue
					// @return FluxogramaAcoes
					if (is_null($mixValue)) {
						$this->intFluxogramaAcoesId = null;
						$this->objFluxogramaAcoes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaAcoes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaAcoes for this FluxogramaItem');

						// Update Local Member Variables
						$this->objFluxogramaAcoes = $mixValue;
						$this->intFluxogramaAcoesId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Maquina':
					// Sets the value for the Maquina object referenced by intMaquinaId 
					// @param Maquina $mixValue
					// @return Maquina
					if (is_null($mixValue)) {
						$this->intMaquinaId = null;
						$this->objMaquina = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Maquina object
						try {
							$mixValue = QType::Cast($mixValue, 'Maquina');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Maquina object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Maquina for this FluxogramaItem');

						// Update Local Member Variables
						$this->objMaquina = $mixValue;
						$this->intMaquinaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for BalancoAcoes
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancoAcoeses as an array of BalancoAcoes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoes[]
		*/ 
		public function GetBalancoAcoesArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return BalancoAcoes::LoadArrayByFluxogramaItemId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancoAcoeses
		 * @return int
		*/ 
		public function CountBalancoAcoeses() {
			if ((is_null($this->intId)))
				return 0;

			return BalancoAcoes::CountByFluxogramaItemId($this->intId);
		}

		/**
		 * Associates a BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function AssociateBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoes on this unsaved FluxogramaItem.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoes on this FluxogramaItem with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`fluxograma_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->FluxogramaItemId = $this->intId;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function UnassociateBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved FluxogramaItem.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this FluxogramaItem with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`fluxograma_item_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`fluxograma_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->FluxogramaItemId = null;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all BalancoAcoeses
		 * @return void
		*/ 
		public function UnassociateAllBalancoAcoeses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByFluxogramaItemId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->FluxogramaItemId = null;
					$objBalancoAcoes->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`fluxograma_item_id` = null
				WHERE
					`fluxograma_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated BalancoAcoes
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function DeleteAssociatedBalancoAcoes(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved FluxogramaItem.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this FluxogramaItem with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`fluxograma_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated BalancoAcoeses
		 * @return void
		*/ 
		public function DeleteAllBalancoAcoeses() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoes on this unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByFluxogramaItemId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`fluxograma_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FluxogramaItem"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Referencia" type="xsd1:Referencia"/>';
			$strToReturn .= '<element name="Ordenacao" type="xsd:int"/>';
			$strToReturn .= '<element name="FluxogramaAcoes" type="xsd1:FluxogramaAcoes"/>';
			$strToReturn .= '<element name="Maquina" type="xsd1:Maquina"/>';
			$strToReturn .= '<element name="Tempo" type="xsd:int"/>';
			$strToReturn .= '<element name="Ativo" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FluxogramaItem', $strComplexTypeArray)) {
				$strComplexTypeArray['FluxogramaItem'] = FluxogramaItem::GetSoapComplexTypeXml();
				Referencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				FluxogramaAcoes::AlterSoapComplexTypeArray($strComplexTypeArray);
				Maquina::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FluxogramaItem::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FluxogramaItem();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Referencia')) &&
				($objSoapObject->Referencia))
				$objToReturn->Referencia = Referencia::GetObjectFromSoapObject($objSoapObject->Referencia);
			if (property_exists($objSoapObject, 'Ordenacao'))
				$objToReturn->intOrdenacao = $objSoapObject->Ordenacao;
			if ((property_exists($objSoapObject, 'FluxogramaAcoes')) &&
				($objSoapObject->FluxogramaAcoes))
				$objToReturn->FluxogramaAcoes = FluxogramaAcoes::GetObjectFromSoapObject($objSoapObject->FluxogramaAcoes);
			if ((property_exists($objSoapObject, 'Maquina')) &&
				($objSoapObject->Maquina))
				$objToReturn->Maquina = Maquina::GetObjectFromSoapObject($objSoapObject->Maquina);
			if (property_exists($objSoapObject, 'Tempo'))
				$objToReturn->intTempo = $objSoapObject->Tempo;
			if (property_exists($objSoapObject, 'Ativo'))
				$objToReturn->blnAtivo = $objSoapObject->Ativo;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FluxogramaItem::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferencia)
				$objObject->objReferencia = Referencia::GetSoapObjectFromObject($objObject->objReferencia, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaId = null;
			if ($objObject->objFluxogramaAcoes)
				$objObject->objFluxogramaAcoes = FluxogramaAcoes::GetSoapObjectFromObject($objObject->objFluxogramaAcoes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaAcoesId = null;
			if ($objObject->objMaquina)
				$objObject->objMaquina = Maquina::GetSoapObjectFromObject($objObject->objMaquina, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMaquinaId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $Ordenacao
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $MaquinaId
	 * @property-read QQNodeMaquina $Maquina
	 * @property-read QQNode $Tempo
	 * @property-read QQNode $Ativo
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 */
	class QQNodeFluxogramaItem extends QQNode {
		protected $strTableName = 'fluxograma_item';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItem';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'Ordenacao':
					return new QQNode('ordenacao', 'Ordenacao', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'MaquinaId':
					return new QQNode('maquina_id', 'MaquinaId', 'integer', $this);
				case 'Maquina':
					return new QQNodeMaquina('maquina_id', 'Maquina', 'integer', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'Ativo':
					return new QQNode('ativo', 'Ativo', 'boolean', $this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'fluxograma_item_id');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $Ordenacao
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $MaquinaId
	 * @property-read QQNodeMaquina $Maquina
	 * @property-read QQNode $Tempo
	 * @property-read QQNode $Ativo
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFluxogramaItem extends QQReverseReferenceNode {
		protected $strTableName = 'fluxograma_item';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItem';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'Ordenacao':
					return new QQNode('ordenacao', 'Ordenacao', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'MaquinaId':
					return new QQNode('maquina_id', 'MaquinaId', 'integer', $this);
				case 'Maquina':
					return new QQNodeMaquina('maquina_id', 'Maquina', 'integer', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'Ativo':
					return new QQNode('ativo', 'Ativo', 'boolean', $this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'fluxograma_item_id');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>