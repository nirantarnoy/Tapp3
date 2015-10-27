<?php

namespace backend\controllers;

use Yii;
use backend\models\Car4;
use backend\models\Car4Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Car4Controller implements the CRUD actions for Car4 model.
 */
class Car4Controller extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Car4 models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new Car4Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Car4 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Car4 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Car4();



        if ($model->load(Yii::$app->request->post())) {
            $uploaded = UploadedFile::getInstance($model, 'myfile');
            // $uploaded = UploadedFile::getInstances($model, 'myfile');
            if (!empty($uploaded)) {
                   $upfiles = time() . "." . $uploaded->getExtension();
                  if ($uploaded->saveAs('../../uploads/' . $upfiles)) {
                      //  $handle = fopen('../../uploads/' . $upfiles, 'r');
                    }
//                echo $handle;
//                                return;
                $filename = '../../uploads/'.$upfiles;
                
                $excelfile = \PHPExcel_IOFactory::identify($filename);
                $objReader = \PHPExcel_IOFactory::createReader($excelfile);
                $objfile = $objReader->load($filename);

                $sheet = $objfile->getSheet(0);
                $rowcount = $sheet->getHighestRow();
                $columncount = $sheet->getHighestColumn();
 $result = 0;
                for ($row = 0; $row <= $rowcount; $row++) {
                    $rowdata = $sheet->rangeToArray('A' . $row . ':' . $columncount . $row, NULL, TRUE, FALSE);
                    if ($row == 1) {
                        continue;
                    }
                    $name = $rowdata[0][2];
                    $gen = explode("/", $name);
                    if ($name == '') {
                        continue;
                    }
                    //  echo $rowdata[0][2].'<BR />';
                    // foreach ($gen as $x){echo $x.'<BR />';}
                   // echo $gen[0] . ' ' . $gen[1] . ' ' . $gen[2];

                    //if($row>1){return;}
                    $model2 = new \backend\Models\Car4();

                    $model2->brand = $gen[0];
                    $model2->gen = $gen[1];
                    $model2->o1 = isset($gen[2])?$gen[2]:'' ;
                    $model2->o2 = isset($gen[3])?$gen[3]:'' ;
                    $model2->o3 = isset($gen[4])?$gen[4]:'' ;
                    $model2->o4 = isset($gen[5])?$gen[5]:'' ;
                    $model2->o5 = isset($gen[6])?$gen[6]:'' ;
                    
                      if ($model2->save()) {
                            $result++;
                        }
                }

            }
            if ($result >0) {
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Car4 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->car4_id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Car4 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Car4 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Car4 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Car4::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
