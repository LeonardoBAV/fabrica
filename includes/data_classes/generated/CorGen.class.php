<?php
	/**
	 * The abstract CorGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Cor subclass which
	 * extends this CorGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Cor class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Nome the value for strNome (Unique)
	 * @property Referencia $_Referencia the value for the private _objReferencia (Read-Only) if set due to an expansion on the referencia_cor_assn association table
	 * @property Referencia[] $_ReferenciaArray the value for the private _objReferenciaArray (Read-Only) if set due to an ExpandAsArray on the referencia_cor_assn association table
	 * @property OrdemProducaoGrade $_OrdemProducaoGrade the value for the private _objOrdemProducaoGrade (Read-Only) if set due to an expansion on the ordem_producao_grade.cor_id reverse relationship
	 * @property OrdemProducaoGrade[] $_OrdemProducaoGradeArray the value for the private _objOrdemProducaoGradeArray (Read-Only) if set due to an ExpandAsArray on the ordem_producao_grade.cor_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CorGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column cor.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column cor.nome
		 * @var string strNome
		 */
		protected $strNome;
		const NomeMaxLength = 150;
		const NomeDefault = null;


		/**
		 * Private member variable that stores a reference to a single Referencia object
		 * (of type Referencia), if this Cor object was restored with
		 * an expansion on the referencia_cor_assn association table.
		 * @var Referencia _objReferencia;
		 */
		private $_objReferencia;

		/**
		 * Private member variable that stores a reference to an array of Referencia objects
		 * (of type Referencia[]), if this Cor object was restored with
		 * an ExpandAsArray on the referencia_cor_assn association table.
		 * @var Referencia[] _objReferenciaArray;
		 */
		private $_objReferenciaArray = array();

		/**
		 * Private member variable that stores a reference to a single OrdemProducaoGrade object
		 * (of type OrdemProducaoGrade), if this Cor object was restored with
		 * an expansion on the ordem_producao_grade association table.
		 * @var OrdemProducaoGrade _objOrdemProducaoGrade;
		 */
		private $_objOrdemProducaoGrade;

		/**
		 * Private member variable that stores a reference to an array of OrdemProducaoGrade objects
		 * (of type OrdemProducaoGrade[]), if this Cor object was restored with
		 * an ExpandAsArray on the ordem_producao_grade association table.
		 * @var OrdemProducaoGrade[] _objOrdemProducaoGradeArray;
		 */
		private $_objOrdemProducaoGradeArray = array();

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
		 * Load a Cor from PK Info
		 * @param integer $intId
		 * @return Cor
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Cor::QuerySingle(
				QQ::Equal(QQN::Cor()->Id, $intId)
			);
		}

		/**
		 * Load all Cors
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cor[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Cor::QueryArray to perform the LoadAll query
			try {
				return Cor::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Cors
		 * @return int
		 */
		public static function CountAll() {
			// Call Cor::QueryCount to perform the CountAll query
			return Cor::QueryCount(QQ::All());
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
			$objDatabase = Cor::GetDatabase();

			// Create/Build out the QueryBuilder object with Cor-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'cor');
			Cor::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('cor');

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
		 * Static Qcodo Query method to query for a single Cor object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cor the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Cor object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Cor::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Cor::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Cor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cor[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Cor::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Cor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Cor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Cor::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'cor_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Cor-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Cor::GetSelectFields($objQueryBuilder);
				Cor::GetFromFields($objQueryBuilder);

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
			return Cor::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Cor
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'cor';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'nome', $strAliasPrefix . 'nome');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Cor from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Cor::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Cor
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
					$strAliasPrefix = 'cor__';

				$strAlias = $strAliasPrefix . 'referencia__referencia_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objReferenciaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objReferenciaArray[$intPreviousChildItemCount - 1];
						$objChildItem = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__referencia_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objReferenciaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objReferenciaArray[] = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				$strAlias = $strAliasPrefix . 'ordemproducaograde__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objOrdemProducaoGradeArray)) {
						$objPreviousChildItem = $objPreviousItem->_objOrdemProducaoGradeArray[$intPreviousChildItemCount - 1];
						$objChildItem = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objOrdemProducaoGradeArray[] = $objChildItem;
					} else
						$objPreviousItem->_objOrdemProducaoGradeArray[] = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'cor__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Cor object
			$objToReturn = new Cor();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nome', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nome'] : $strAliasPrefix . 'nome';
			$objToReturn->strNome = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'cor__';



			// Check for Referencia Virtual Binding
			$strAlias = $strAliasPrefix . 'referencia__referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objReferenciaArray[] = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia__referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for OrdemProducaoGrade Virtual Binding
			$strAlias = $strAliasPrefix . 'ordemproducaograde__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objOrdemProducaoGradeArray[] = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Cors from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Cor[]
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
					$objItem = Cor::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Cor::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Cor object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Cor next row resulting from the query
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
			return Cor::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Cor object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Cor
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Cor::QuerySingle(
				QQ::Equal(QQN::Cor()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Cor object,
		 * by Nome Index(es)
		 * @param string $strNome
		 * @return Cor
		*/
		public static function LoadByNome($strNome, $objOptionalClauses = null) {
			return Cor::QuerySingle(
				QQ::Equal(QQN::Cor()->Nome, $strNome)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Referencia objects for a given Referencia
		 * via the referencia_cor_assn table
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cor[]
		*/
		public static function LoadArrayByReferencia($intReferenciaId, $objOptionalClauses = null) {
			// Call Cor::QueryArray to perform the LoadArrayByReferencia query
			try {
				return Cor::QueryArray(
					QQ::Equal(QQN::Cor()->Referencia->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Cors for a given Referencia
		 * via the referencia_cor_assn table
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferencia($intReferenciaId, $objOptionalClauses = null) {
			return Cor::QueryCount(
				QQ::Equal(QQN::Cor()->Referencia->ReferenciaId, $intReferenciaId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Cor
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `cor` (
							`nome`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNome) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('cor', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`cor`
						SET
							`nome` = ' . $objDatabase->SqlVariable($this->strNome) . '
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
		 * Delete this Cor
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Cor with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cor`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Cors
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cor`');
		}

		/**
		 * Truncate cor table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `cor`');
		}

		/**
		 * Reload this Cor from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Cor object.');

			// Reload the Object
			$objReloaded = Cor::Load($this->intId);

			// Update $this's local variables to match
			$this->strNome = $objReloaded->strNome;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Cor::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `cor` (
					`id`,
					`nome`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strNome) . ',
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
		 * @return Cor[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Cor::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM cor WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Cor::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Cor[]
		 */
		public function GetJournal() {
			return Cor::GetJournalForId($this->intId);
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

				case 'Nome':
					// Gets the value for strNome (Unique)
					// @return string
					return $this->strNome;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Referencia':
					// Gets the value for the private _objReferencia (Read-Only)
					// if set due to an expansion on the referencia_cor_assn association table
					// @return Referencia
					return $this->_objReferencia;

				case '_ReferenciaArray':
					// Gets the value for the private _objReferenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the referencia_cor_assn association table
					// @return Referencia[]
					return (array) $this->_objReferenciaArray;

				case '_OrdemProducaoGrade':
					// Gets the value for the private _objOrdemProducaoGrade (Read-Only)
					// if set due to an expansion on the ordem_producao_grade.cor_id reverse relationship
					// @return OrdemProducaoGrade
					return $this->_objOrdemProducaoGrade;

				case '_OrdemProducaoGradeArray':
					// Gets the value for the private _objOrdemProducaoGradeArray (Read-Only)
					// if set due to an ExpandAsArray on the ordem_producao_grade.cor_id reverse relationship
					// @return OrdemProducaoGrade[]
					return (array) $this->_objOrdemProducaoGradeArray;


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
				case 'Nome':
					// Sets the value for strNome (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNome = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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

			
		
		// Related Objects' Methods for OrdemProducaoGrade
		//-------------------------------------------------------------------

		/**
		 * Gets all associated OrdemProducaoGrades as an array of OrdemProducaoGrade objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return OrdemProducaoGrade[]
		*/ 
		public function GetOrdemProducaoGradeArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return OrdemProducaoGrade::LoadArrayByCorId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated OrdemProducaoGrades
		 * @return int
		*/ 
		public function CountOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				return 0;

			return OrdemProducaoGrade::CountByCorId($this->intId);
		}

		/**
		 * Associates a OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function AssociateOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducaoGrade on this unsaved Cor.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrdemProducaoGrade on this Cor with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->CorId = $this->intId;
				$objOrdemProducaoGrade->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function UnassociateOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved Cor.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this Cor with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`cor_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . ' AND
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->CorId = null;
				$objOrdemProducaoGrade->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all OrdemProducaoGrades
		 * @return void
		*/ 
		public function UnassociateAllOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved Cor.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducaoGrade::LoadArrayByCorId($this->intId) as $objOrdemProducaoGrade) {
					$objOrdemProducaoGrade->CorId = null;
					$objOrdemProducaoGrade->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ordem_producao_grade`
				SET
					`cor_id` = null
				WHERE
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated OrdemProducaoGrade
		 * @param OrdemProducaoGrade $objOrdemProducaoGrade
		 * @return void
		*/ 
		public function DeleteAssociatedOrdemProducaoGrade(OrdemProducaoGrade $objOrdemProducaoGrade) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved Cor.');
			if ((is_null($objOrdemProducaoGrade->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this Cor with an unsaved OrdemProducaoGrade.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objOrdemProducaoGrade->Id) . ' AND
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objOrdemProducaoGrade->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated OrdemProducaoGrades
		 * @return void
		*/ 
		public function DeleteAllOrdemProducaoGrades() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrdemProducaoGrade on this unsaved Cor.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (OrdemProducaoGrade::LoadArrayByCorId($this->intId) as $objOrdemProducaoGrade) {
					$objOrdemProducaoGrade->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ordem_producao_grade`
				WHERE
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Referencia
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Referencias as an array of Referencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Referencia[]
		*/ 
		public function GetReferenciaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Referencia::LoadArrayByCor($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Referencias
		 * @return int
		*/ 
		public function CountReferencias() {
			if ((is_null($this->intId)))
				return 0;

			return Referencia::CountByCor($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Referencia
		 * @param Referencia $objReferencia
		 * @return bool
		*/
		public function IsReferenciaAssociated(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsReferenciaAssociated on this unsaved Cor.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsReferenciaAssociated on this Cor with an unsaved Referencia.');

			$intRowCount = Cor::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Cor()->Id, $this->intId),
					QQ::Equal(QQN::Cor()->Referencia->ReferenciaId, $objReferencia->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Referencia relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalReferenciaAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Cor::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `referencia_cor_assn` (
					`cor_id`,
					`referencia_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intAssociatedId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object's Referencia relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalReferenciaAssociationForId($intId) {
			$objDatabase = Cor::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM referencia_cor_assn WHERE cor_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Referencia relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalReferenciaAssociation() {
			return Cor::GetJournalReferenciaAssociationForId($this->intId);
		}

		/**
		 * Associates a Referencia
		 * @param Referencia $objReferencia
		 * @return void
		*/ 
		public function AssociateReferencia(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferencia on this unsaved Cor.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReferencia on this Cor with an unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `referencia_cor_assn` (
					`cor_id`,
					`referencia_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objReferencia->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalReferenciaAssociation($objReferencia->Id, 'INSERT');
		}

		/**
		 * Unassociates a Referencia
		 * @param Referencia $objReferencia
		 * @return void
		*/ 
		public function UnassociateReferencia(Referencia $objReferencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this unsaved Cor.');
			if ((is_null($objReferencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReferencia on this Cor with an unsaved Referencia.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_cor_assn`
				WHERE
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`referencia_id` = ' . $objDatabase->SqlVariable($objReferencia->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalReferenciaAssociation($objReferencia->Id, 'DELETE');
		}

		/**
		 * Unassociates all Referencias
		 * @return void
		*/ 
		public function UnassociateAllReferencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllReferenciaArray on this unsaved Cor.');

			// Get the Database Object for this Class
			$objDatabase = Cor::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `referencia_id` AS associated_id FROM `referencia_cor_assn` WHERE `cor_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalReferenciaAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`referencia_cor_assn`
				WHERE
					`cor_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Cor"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Nome" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Cor', $strComplexTypeArray)) {
				$strComplexTypeArray['Cor'] = Cor::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Cor::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Cor();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Nome'))
				$objToReturn->strNome = $objSoapObject->Nome;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Cor::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNodeReferencia $_ChildTableNode
	 */
	class QQNodeCorReferencia extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'referencia';

		protected $strTableName = 'referencia_cor_assn';
		protected $strPrimaryKey = 'cor_id';
		protected $strClassName = 'Referencia';

		public function __get($strName) {
			switch ($strName) {
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'ReferenciaId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeReferencia('referencia_id', 'ReferenciaId', 'integer', $this);
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
	 * @property-read QQNode $Nome
	 * @property-read QQNodeCorReferencia $Referencia
	 * @property-read QQReverseReferenceNodeOrdemProducaoGrade $OrdemProducaoGrade
	 */
	class QQNodeCor extends QQNode {
		protected $strTableName = 'cor';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Cor';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Referencia':
					return new QQNodeCorReferencia($this);
				case 'OrdemProducaoGrade':
					return new QQReverseReferenceNodeOrdemProducaoGrade($this, 'ordemproducaograde', 'reverse_reference', 'cor_id');

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
	 * @property-read QQNode $Nome
	 * @property-read QQNodeCorReferencia $Referencia
	 * @property-read QQReverseReferenceNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCor extends QQReverseReferenceNode {
		protected $strTableName = 'cor';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Cor';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Nome':
					return new QQNode('nome', 'Nome', 'string', $this);
				case 'Referencia':
					return new QQNodeCorReferencia($this);
				case 'OrdemProducaoGrade':
					return new QQReverseReferenceNodeOrdemProducaoGrade($this, 'ordemproducaograde', 'reverse_reference', 'cor_id');

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