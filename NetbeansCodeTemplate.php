<?php

/**
 * Netbeans自带代码模板
 * 
 * PHP代码规范,统一编码风格(phpDoc)。
 * 
 * @author momosc <shenchensuqian@gmail.com>
 * @see 2019.1.8
 * @version 1.0
 * @package NetbeansCodeTemplate
 */
class NetbeansCodeTemplate
{

    /**
     * 版本
     * @var float
     */
    const VERSION = 1.0;

    /**
     * 标签
     * @var string 
     */
    public $key;

    /**
     *  代码
     * @var string 
     */
    protected $value;

    /**
     *  netbeans 对象
     * @var object
     */
    private $netbeansObj;

    /**
     * 构造方法
     * @param void
     */
    function __construct()
    {
        $this->value = '';
        $this->netbeansObj = (object) ['netbeansObj' => 'netbeansObj'];
    }

    /**
     * 输入netbeans代码模板(标签)
     * 
     * @param string $input
     * @return boolean 
     */
    public function input($input)
    {
        return $this->key = $input;
    }

    /**
     * 根据input输出php代码
     * 
     * @param string $key
     * @return string
     */
    public function output()
    {
        switch ($this->key) {
            case 'cln':

                return '                $newObj = clone $this';

                break;
            case 'cls':

                return '                class ClassName
                {

                    function __construct()
                    {
                        
                    }

                }';

                break;
            case 'do':

                return '                do {
                    
                } while (true);';

                break;
            case 'eco':

                return '                echo "";';

                break;
            case 'elif':

                return '                elseif (true){
                    
                }';

                break;
            case 'fcom':

                return '<editor-fold defaultstate="collapsed" desc="comment"></editor-fold>';

                break;
            case 'fore':

                return '                foreach ($array as $value) {
                    
                }';

                break;
            case 'if':

                return '                if (true) {
                    
                }';

                break;
            case 'iface':

                return '                interface InterfaceName
                {
                    
                }';

                break;
            case 'ifnc':

                return '                public function functionName($param);';

                break;
            case 'inst':

                return '                if ($this instanceof ClassName) {
                    
                }';

                break;
            case 'itdir':

                return '                $dirh = opendir($dirname);
                if ($dirh) {
                    while (($dirElement = readdir($dirh)) !== false) {
                        
                    }
                    closedir($dirh);
                }';

                break;
            case 'iter':

                return '                for ($index = 0; $index < count($array); $index++) {
                    
                }';

                break;
            case 'my_fa':

                return '                while ($row = mysql_fetch_array($query)) {
                    
                }';

                break;
            case 'my_fo':

                return '                while ($row = mysql_fetch_object($query)) {
                    
                }';

                break;
            case 'my_fr':

                return '                while ($row = mysql_fetch_row($query)) {
                    
                }';

                break;
            case 'pclon':

                return '                parent::__clone();';

                break;
            case 'pcon':

                return '                parent::__construct();';

                break;
            case 'pfnc':

                return '                public function functionName($param)
                {
                    
                }';

                break;
            case 'pr':

                return '                print $this;';

                break;
            case 'prln':

                return '                print $this . "\n";';

                break;
            case 'prs':

                return '                print "";';

                break;
            case 'prv':

                return '                print "\$this = " . $this . "\n";';

                break;
            case 'ptfnc':

                return '                protected function functionName($param)
                {
                    
                }';

                break;
            case 'swi':

                return '                switch ($this) {
                    case $value:


                        break;

                    default:
                        break;
                }';

                break;
            case 'thr':

                return '                throw new Exception;';

                break;
            case 'tryc':

                return '                try {
                    
                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                }
';

                break;
            case 'tryf':

                return '                try {
                    
                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                } finally {
                    
                }';

                break;
            case 'vdoc':

                return '/* @var $this NetbeansCodeTemplate */';

                break;
            case 'while':

                return '                while (true) {
                    
                }';

                break;

                break;
            default:
                break;
        }
    }
    /**
     * 获取netbeans默认代码模板列表
     * 
     * @return array
     */
    public function getDefaultTplList()
    {
        $tplStr = 'cln,cls,do,eco,elif,els,fcom,fnc,fore,forek,if,iface,ifnc,inst,'
                . 'itdir,iter,my_fa,my_fo,my_fr,my_gc,pclon,pcon,pfnc,pr,prln,prs,'
                . 'prv,ptfnc,swi,thr,trt,tryc,tryf,vdoc,while';
        $tplArray = explode(',', $tplStr);
        $tplList = [];
        foreach ($tplArray as $value) {
            $this->input($value);
            $tplList[$value] = $this->output();
        }
        return $tplList;
    }

}