<?php

class ThemeMakerController extends Controller
{
    public $layout = '//layouts/columnNewPage';
    public $navData = '';
    public $newsData = '';
    public $multiData = array();
//    public $newsData = array('YiiBlog', 'YiiBook');
//    $newsData['YiiBlog'] = 'http://YiiBlog.info';
//    $newsData['YiiBook'] = 'http://YiiBlog.com';

    public function actionIndex()
    {
//        $this->layout = '//layouts/Acalia2017';
        $this->layout = '//layouts/columnNewPage';

        $newsData[1] = array('title' => 'Yii Go Video NO.412', 'content' => 'how to operate views');
        $newsData[2] = array('title' => 'Yii Go Video NO.412', 'content' => 'how to operate views');

        $this->render('index',
            array('newsData' => $newsData,)
        );

    }

    public function actionNewTheme()
    {
        $this->layout = '//layouts/columnNewPage';

        $newsData_tmp = array('YiiBlog', 'YiiBook');
        $this->newsData = $newsData_tmp;
        $data1 = array('title' => 'Yii Go Video NO.412', 'content' => 'how to operate views');
        $data2 = array('title' => 'Yii Go Video NO.413_1', 'content' => 'how to operate views');
//        $this->multiData.array_push();
        $this->multiData[1] = $data1;
        $this->multiData[2] = $data2;

        $tmpNavData = array();
        $tmpNavData['YiiBlog'] = 'http://YiiBlog.info';
        $tmpNavData['YiiBook'] = 'http://YiiBlog.com';
        $tmpNavData['YiiChina'] = 'http://YiiBlog.org';
        $tmpNavData['YiiFramework'] = 'http://www.YiiFramework.com';
        $this->navData = $tmpNavData;

        $this->render('newTheme',
            array('newsData' => $this->newsData,
                'multiData' => $this->multiData,
            ));
    }
}