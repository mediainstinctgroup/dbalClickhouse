<?php
/**
 * Created by PhpStorm.
 * User: ageneralov
 * Date: 2019-02-15
 * Time: 16:52
 */

namespace FOD\DBALClickHouse\Types;


use Doctrine\DBAL\Platforms\AbstractPlatform;

use Doctrine\DBAL\Types\DateType;

class DateIdType extends DateType
{
	public function getName()
	{
		return "date_id";
	}

	public function convertToPHPValue($value, AbstractPlatform $platform)
	{
		return new DateTimeToString($value);
	}

	public function convertToDatabaseValue($value, AbstractPlatform $platform)
	{
		return parent::convertToDatabaseValue($value, $platform); // TODO: Change the autogenerated stub
	}


}