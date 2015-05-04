<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\ProductsSearch;
use app\models\Products;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ProductDetail;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    // 'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model= new Products();
        $this->layout='main';

        // $searchModel = new ProductsSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider = new ActiveDataProvider([
            'query' => Products::find(),
        ]);
        return $this->render('index', [
            // 'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        // $detail = new ProductDetail();


        // if ($model->load(Yii::$app->request->post()) && $model->save())  && $detail->load(Yii::$app->request->post()) && $detail->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }else{
        //            return $this->render('create', [
        //         'model' => $model,
        //         'detail' => $detail,
        //     ]);

        // }
    

        if ($model->load(Yii::$app->request->post()) ){

                $model->product_ID= 8;
                $model->creator = "1";
                $model->editor ="1";

                $now = new \DateTime('now', new \DateTimeZone('UTC'));
                $now =  $now->format('yyyy-dd-mm');
                $model ->date_of_creation =$now;
                $model->date_of_edition = $now;
                $model->status = 1;
                $model->cat_id= 1;
                $model->product_name="sdf";

                if($model->save() ){
                     return $this->redirect(['view', 'id' => $model->product_ID]);
                }
                var_dump($model->getErrors());
                // $detail =  new ProductDetail();
                // $detail->product_id = $model->product_ID;
                // $detail->price = $model->price;

                // $detail->description = $model->description;
                // $detail->description_image = $model->description_image;
                // $detail->thumbnail_image = $model->thumbnail_image;

                // $detail->save();

               
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
    } 

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                // $detail->product_id = $model->product_ID;
                // $detail->price = $model->price;
                // $detail->description = $model->description;
                // $detail->description_image = $model->description_image;
                // $detail->thumbnail_image = $model->thumbnail_image;

                // $detail->save();
            return $this->redirect(['view', 'id' => $model->product_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        // $detail = $this->findModel($id);
        
        $model->status = 0;
        if($model->save()){
            return $this->redirect(['view', 'id' => $model->product_ID]);
        }
        else{
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            $model->price =$model->productDetails['price'];
            $model->description =$model->productDetails['description'];
            $model->thumbnail_image =$model->productDetails['thumbnail_image'];
            $model->description_image =$model->productDetails['description_image'];
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
