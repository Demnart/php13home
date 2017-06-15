<?php


class View
{
    protected $data =[];


    public function __set($name, $value)
    {
       $this->data[$name] = $value;
    }

    public function displayAll($template)
    {
        foreach ($this->data as $key=>$value )
        {
            $$key = $value;
        }

        include __DIR__ . '/../views/' . $template;
    }

    public function displayOne($template)
    {
        foreach ($this->data as $key=>$value)
        {
            $$key = $value;
        }
        include __DIR__ . '/../views/' . $template;

    }


}