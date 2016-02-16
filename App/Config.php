<?php
namespace App;

class Config
{

    use Singleton;
    private $config_file;

    protected function __construct($config_file = 'config')
    {
        $this->config_file = SITE_ROOT . $config_file . '.php';
        include_once $this->config_file;
        $this->data = $data;
    }

    public function save()
    {
        $config_string = "<?php\r\n";
        foreach ($this->data as $k=>$v){
            $config_string .= "\$data['" . $k . "'] = " . var_export($v, true) . ";\r\n";
        }
        return file_put_contents($this->config_file, $config_string);
    }


}