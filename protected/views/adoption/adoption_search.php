 <?php

    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'adoption-article-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
			'province_id',
            'title',
            'content',
        ),
    ));
    ?>