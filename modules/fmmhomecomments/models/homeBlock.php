<?php
/***************************************************************
 * FME homeComment Model.
 * Welcome to FME.
 * Glad to see you.
 ***************************************************************
 */

class homeBlock extends ObjectModel
{
	public function insertTitle($Id,$Title)
		{	
			
			$sql = 'INSERT INTO `'._DB_PREFIX_.'configuration_lang` (`id_configuration`, `value`)
				VALUES('.(int)$Id.', "'.pSQL($Title).'")';
			
			if (Db::getInstance()->executeS($sql))
			    return Db::getInstance()->Insert_ID();
			
		}

	public function deleteTitle($Id)
		{	
			
			$sql = 'DELETE FROM `'._DB_PREFIX_.'configuration_lang`
				WHERE `id_configuration` ='.(int)$Id;
				
			if (Db::getInstance()->executeS($sql))
			    return Db::getInstance()->Insert_ID();
			
		}

	public function getTitle()
		{
			$sql = 'SELECT `id_lang`,`value`
					FROM `'._DB_PREFIX_.'configuration_lang`
					WHERE `id_configuration` ='.(int)327;
			

			$mytitle = Db::getInstance()->executeS($sql);
			
			if(is_array($mytitle))	
			{	
				foreach($mytitle as $title)
					{
						$Title = $result[(int)$title['id_lang']]['value'] = $title['value'];

					}

			}	

			return $Title;
		
		}

	public function updateTitle($Title)
		{
	
			$sql = 'UPDATE `'._DB_PREFIX_.'configuration_lang`
					SET `value` = "'.pSQL($Title).'"
					WHERE `id_configuration` = 327';

			if (Db::getInstance()->executeS($sql))
			    return Db::getInstance()->Insert_ID();

		}

	public static function getAll($id_lang)
	{

		$sql = 'SELECT pc.*,pl.*, im.*
				FROM `'._DB_PREFIX_.'product_comment` pc  
				LEFT JOIN `'._DB_PREFIX_.'product_lang` pl 
					ON pc.id_product = pl.id_product
				INNER JOIN `'._DB_PREFIX_.'image` im 
					ON pc.id_product = im.id_product
				WHERE pl.`id_product` = pc.`id_product`
			 	AND pl.`id_lang`='.(int)$id_lang.'
			 	GROUP BY pc.id_product_comment';		

			$id_image = Db::getInstance()->executeS($sql);

		return $id_image;

	}
}

?>