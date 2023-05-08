<?php
class Model_contacts extends Model
{
	public function get_data()
	{	
		// Здесь мы просто симулируем реальные данные.
		return array(
			array(
				'name' => 'ООО "Компания Орифлейм"',
				'adress' => 'г. Нижневартовск, ул. Химиков, д.3',
				'email' => 'user@oriflame.ru'
			),
			array(
				'name' => 'ООО Avon',
				'adress' => 'г. Халтурино, ул. Класнознаменная, д.54',
				'email' => 'gost@avon.ru'
			),
		);
	}
}