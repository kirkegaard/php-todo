<?php

class Todo
{

    protected $_options = array();

    public function __construct($config = array())
    {
        
    }

    public function add($string, $priority = 0)
    {
        return 'add item';
    }

    public function delete($id)
    {
        return 'delete item : ' . $id;
    }

    public function setPriority($id, $priority)
    {
        
    }

    public function getList()
    {
        
    }

    public function save()
    {
        
    }

}