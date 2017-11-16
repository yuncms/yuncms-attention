<?php

namespace yuncms\attention\models;

/**
 * This is the ActiveQuery class for [[Attention]].
 *
 * @see Attention
 */
class AttentionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /*public function active()
    {
        return $this->andWhere(['status' => Attention::STATUS_PUBLISHED]);
    }*/

    /**
     * @inheritdoc
     * @return Attention[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Attention|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

}
