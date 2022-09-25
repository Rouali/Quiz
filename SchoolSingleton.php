<?php class SchoolSingleton
{
    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;

    private function __construct($name, $add)
    {
        self::$schoolName = $name;
        self::$schoolAdd = $add;
    }


    public static function getInstance($name, $add)
    {
        if (!(self::$singleInstance instanceof self)) {
            self::$singleInstance = new self($name, $add);
        }

        return self::$singleInstance;
    }


    public static function getSchoolName()
    {
        return self::$schoolName;
    }
    public static function getSchoolAdd()
    {
        return self::$schoolAdd;
    }

    private function __clone()
    {
    }
}


$first_instance = SchoolSingleton::getInstance('auc','there');

echo($first_instance->getSchoolName());
echo '<br>';
echo($first_instance->getSchoolAdd());

echo '<br>';
echo '<br>';
$second_instance = SchoolSingleton::getInstance('guc','here');

echo($second_instance->getSchoolName());
echo '<br>';
echo($second_instance->getSchoolAdd());
