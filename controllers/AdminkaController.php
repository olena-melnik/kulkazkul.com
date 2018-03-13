<?php
/**
 * Created by PhpStorm.
 * User: Инга
 * Date: 11.02.2018
 * Time: 22:38
 */

class AdminkaController extends AdminBase
{
    /**Выводим админ панель, проверяем является ли пользователь администратором
     * @return bool
     */
    public function actionIndex(){
        self::checkAdmin();

        require_once(ROOT . '/views/site/admin/admin_home.php');
        return true;
    }

    /**Страница редактирования слайдера с главной страницы, возможность добавлять новые слайды
     * @return bool
     */
    public function actionSlider(){
        self::checkAdmin();

        $slider = scandir(ROOT."/views/image/slider/");
        $sliderWork = array();
        foreach ($slider as $item){
            if($item !== "." && $item !== ".."){
                $sliderWork[] = $item;
            }
        }
        if(isset($_POST['add'])){
            move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/views/image/slider/".$_FILES['image']['name']);
        }

        require_once(ROOT . '/views/site/admin/slider.php');
        return true;
    }

    /**Удаление фотографий из слайдера
     * @param $key
     * @return bool
     */
    public function actionSliderDelete($key){
        self::checkAdmin();

        $slider = scandir(ROOT."/views/image/slider/");
        $sliderWork = array();
        foreach ($slider as $k=>$item){
            if($item !== "." && $item !== ".."){
                $sliderWork[] = $item;
            }
        }

        unlink(ROOT."/views/image/slider/".$sliderWork[$key]);

        header("Location: /admin/slider");

        require_once(ROOT . '/views/site/admin/slider.php');
        return true;
    }

    /**
     * Отображается страница редактирования контактной информации компании
     * @return bool
     */
    public function actionContact(){
        self::checkAdmin();
        $params = array();
        $fileConfig = ROOT.'/config/adminConfig.php';
        $params = include($fileConfig);

        if(isset($_POST['update'])) {
            $params['name'] = $_POST['name'];
            $params['phone'] = $_POST['phone'];
            $params['adress'] = $_POST['adress'];
            $params['email'] = $_POST['email'];
            $params['work'] = $_POST['work'];


            $total = count($params);
            $count = 0;
            /**
             * формируется текст,который будет загружен в файл adminConfig
             */
            $config = '<?php return array(';
            foreach ($params as $key => $item) {
                $count++;
                if (is_array($item)) {
                    $config .= "'".$key."'". "=> array('";
                    $config.= implode("','", $item);
                    $config .= "'), \n";
                }
                else {

                    if($count != $total){
                        $config .= "'".$key."'". "=>"  ."'".$item."', \n";
                    } else {
                        $config .= "'".$key."'" . "=>" ."'". $item."'\n";
                    }
                }
            }

                $config .= ");";


                $fp = fopen($fileConfig, "w"); // Открываем файл в режиме записи
                fwrite($fp, $config); // Запись в файл
                fclose($fp); //Закрытие файла
        }

        require_once (ROOT.'/views/site/admin/contact.php');
        return true;
    }

}