<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
namespace backend\controllers;

use Yii;
use backend\models\RhMemberLive;
use backend\models\RhMemberLiveSearch;
use backend\base\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl; //登陆受限

/**
 * RhMemberLiveController implements the CRUD actions for RhMemberLive model.
 */
class RhMemberLiveController extends BaseController
{
    public $layout = "Backend_layout";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all RhMemberLive models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RhMemberLiveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RhMemberLive model.
     * @param string $member_name
     * @param string $live_pic_id
     * @return mixed
     */
    public function actionView($member_name, $live_pic_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($member_name, $live_pic_id),
        ]);
    }

    /**
     * Creates a new RhMemberLive model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RhMemberLive();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'member_name' => $model->member_name, 'live_pic_id' => $model->live_pic_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RhMemberLive model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $member_name
     * @param string $live_pic_id
     * @return mixed
     */
    public function actionUpdate($member_name, $live_pic_id)
    {
        $model = $this->findModel($member_name, $live_pic_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'member_name' => $model->member_name, 'live_pic_id' => $model->live_pic_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RhMemberLive model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $member_name
     * @param string $live_pic_id
     * @return mixed
     */
    public function actionDelete($member_name, $live_pic_id)
    {
        $this->findModel($member_name, $live_pic_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RhMemberLive model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $member_name
     * @param string $live_pic_id
     * @return RhMemberLive the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($member_name, $live_pic_id)
    {
        if (($model = RhMemberLive::findOne(['member_name' => $member_name, 'live_pic_id' => $live_pic_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
