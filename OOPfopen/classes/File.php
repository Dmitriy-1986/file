<?php

class File
{

    public $fp; //указатель на открытый файл
    public $file; //путь к файлу

    public function __construct($file)
    {
       $this->file = $file; //записываем путь к файлу
       //проверяем доступен ли он для записи
       if(!is_writable($this->file)) 
       {
           echo "Файл {$this->file} недоступен для записи";
           exit;
       }
       //если все ок в свойство fp указываем на открытый файл
       $this->fp = fopen($this->file, 'a');
    }
    //в деструкторе закрываем файл
    public function __destruct()
    {
        fclose($this->fp);
    }
    //функция записывает в файл
    public function write($text)
    {
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
            echo "Не могу произвести запись в файл ($this->file)";
            exit;
        }
    }

}