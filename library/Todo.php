<?php

class Todo
{

    protected $_todos = array();

    protected $_options = array(
        'file' => '.todo'
    );

    public function __construct($config = array())
    {
        if(isset($config['file'])) {
            $this->_options['file'] = $config['file'];
        }
        $this->_getFile();
    }

    public function add($string, $priority = 0)
    {
        array_push($this->_todos, array(
            'todo'     => $string,
            'priority' => $priority
        ));
        return $this->save();
    }

    public function delete($id)
    {
        unset($this->_todos[$id]);
        return $this->save();
    }

    public function setPriority($id, $priority)
    {
        $this->_todos[$id]['priority'] = $priority;
        return $this->save();
    }

    public function getTodos($item = null)
    {
        if(isset($item)) {
            $list = $this->_todos[$item];
        } else {
            $list = $this->_todos;
        }

        return $this->_sort($list);
    }

    protected function _sort($list = array())
    {
        return $list;
    }

    protected function _getFile()
    {
        $file = unserialize(file_get_contents($this->_options['file']));
        $this->_todos = !$file ? array() : $file;
        return $this;
    }

    public function save()
    {
        file_put_contents($this->_options['file'], serialize($this->_todos));
        return $this;
    }

}
