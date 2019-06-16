<?php

class CDEKLogger extends ObjectModel
{
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $request;
    /**
     * @var string
     */
    public $response;
    /**
     * @var string
     */
    public $date_add;

    public static $definition = array(
        'table' => 'cdek_logger',
        'primary' => 'id_cdek_logger',
        'fields' => array(
            'method' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString'
            ),
            'message' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isString'
            ),
            'request' => array(
                'type' => self::TYPE_NOTHING,
                'validate' => 'isAnything'
            ),
            'response' => array(
                'type' => self::TYPE_NOTHING,
                'validate' => 'isAnything'
            ),
            'date_add' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate'
            )
        )
    );

    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
        $this->date_add = date('Y-m-d H:i:s');
        parent::__construct($id, $id_lang, $id_shop);
    }

    public static function addMessage($method, $message, $request, $response)
    {
        if (!ConfSK::getConf('write_log')) {
            return false;
        }
        $object = new self();
        $object->method = $method;
        $object->message = $message;
        $object->request = ToolsModuleSK::decodeCode($request);
        $object->response = ToolsModuleSK::decodeCode($response);
        $object->save();
    }

    const LIMIT = 20;
    /**
     * @param int $p
     * @param $get_total
     * @return array|false|mysqli_result|null|PDOStatement|resource
     */
    public static function getAll($p = 1, $get_total = false)
    {
        $limit = self::LIMIT;
        $sql = new DbQuery();
        $sql->from('cdek_logger');
        $sql->orderBy('id_cdek_logger DESC');

        if (!$get_total) {
            $sql->select('*');
            $sql->limit($limit, (($p - 1) * $limit));
            $result = Db::getInstance()->executeS($sql->build());
        } else {
            $sql->select('COUNT(id_cdek_logger)');
            $result = (int)Db::getInstance()->getValue($sql->build());
        }

        return $result;
    }
}