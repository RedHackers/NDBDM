<?php

namespace frontend\controllers;

use Yii;
use frontend\models\RhNoteRecord;
use frontend\models\RhNoteRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RhNoteRecordController implements the CRUD actions for RhNoteRecord model.
 */
class RhNoteRecordController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = "front_layout_head"; #全局指定
    public function behaviors()
    {
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
     * Lists all RhNoteRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Lists all RhNoteRecord models.
     * @return activity
     */
    public function actionActivity()
    {
        //$this->layout = "";
        return $this->render('activity');
    }

    /**
     * Lists all RhNoteRecord models.
     * @return member_li
     */
    public function actionMember_li()
    {
        return $this->render('member_li');
    }

    /**
     * Lists all RhNoteRecord models.
     * @return member_jia
     */
    public function actionMember_jia()
    {
        return $this->render('member_jia');
    }

    /**
     * Lists all RhNoteRecord models.
     * @return member_cui
     */
    public function actionMember_cui()
    {
        return $this->render('member_cui');
    }

    /**
     * Lists all RhNoteRecord models.
     * @return member_zhou
     */
    public function actionMember_zhou()
    {
        return $this->render('member_zhou');
    }

    /**
     * Displays a single RhNoteRecord model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RhNoteRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RhNoteRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->note_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionContact()
    {
        $model = new RhNoteRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->note_id]);
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RhNoteRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->note_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RhNoteRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RhNoteRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return RhNoteRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RhNoteRecord::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
