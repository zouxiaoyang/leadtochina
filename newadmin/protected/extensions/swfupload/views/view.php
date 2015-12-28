<link href="<?php echo Yii::app()->request->baseUrl;?>/css/swfupload.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var swfu;
    var settings;
    window.onload = function() {
      settings = {
        flash_url : "<?php echo Yii::app()->request->baseUrl;?>/js/swfupload/swfupload.swf",
        upload_url: "<?php echo $this->config['upload_url'];?>",
        post_params: <?php echo CJavaScript::encode($this->config['post_params']);?>,
        file_size_limit : "<?php echo $this->config['file_size_limit'];?>",
        file_types :'*.jpg;*.png;*.gif',
        //file_types_description : "All Files",
        file_upload_limit : 10,
        file_queue_limit : 0,
        custom_settings : {
          progressTarget : "fsUploadProgress",
         // cancelButtonId : "btnCancel"
        },
        debug: false,

        // Button settings
        //button_image_url: "images/TestImageNoText_65x29.png",
        button_width: "65",
        button_height: "29",
        button_placeholder_id: "spanButtonPlaceHolder",
        button_text: '<span class="theFont">Select</span>',
        button_text_style: ".theFont { font-size: 16; }",
        button_text_left_padding: 12,
        button_text_top_padding: 3,
        
        // The event handler functions are defined in handlers.js
        file_queued_handler : fileQueued,
        file_queue_error_handler : fileQueueError,
        file_dialog_complete_handler : fileDialogComplete,
        upload_start_handler : uploadStart,
        upload_progress_handler : uploadProgress,
        upload_error_handler : uploadError,
        upload_success_handler : uploadSuccess,
        upload_complete_handler : uploadComplete,
        queue_complete_handler : queueComplete  // Queue plugin event
      };

      swfu = new SWFUpload(settings);
       };

       function uploadStart(obj){
        var alt = $('#'+obj.id).find('input').val();
        swfu.addPostParam("alt_desc", alt);
        return true;
       }
      //function uploadSuccess(){location.reload();}
  </script>


<div id="content">
      <div class="fieldset flash" id="fsUploadProgress">
      <span class="legend">Upload Queue</span>
      </div>
      <div id="divStatus">0 Files Uploaded</div>
      <div>
        <span id="spanButtonPlaceHolder"></span>
        <input type="button" value="Start Upload" onclick="swfu.startUpload();" style="margin-left: 2px; font-size: 8pt; height: 29px;" />

      </div>

  </form>
</div>


<?php
/*
$this->widget('application.extensions.swfupload.CFSwfUpload', array(
        'config' => array(
            'upload_url' => Yii::app()->createUrl('cruisepic/upload'),
            'post_params' => array('PHPSESSID'=>$_COOKIE['PHPSESSID'], 'id'=>Yii::app()->user->getState('cruiseid')),
            'file_size_limit' => '2 MB',
        )
        
    )
);
*/
?>

<?php
/*
  public function actionUpload()
  {
    if (isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
      $upload_file = $_FILES['Filedata'];
      $file_info = pathinfo($upload_file['name']);
      $file_type = $file_info['extension'];
      $subDir = date('Ym').'/';
      $saveDir = Cruisepic::UPLOAD_PATH . $subDir;
      if(!is_dir($saveDir)){
        mkdir($saveDir, 0755,true);
      }
      $filename = uniqid().'.'.$file_info['extension'];
      $saveFile = $saveDir.$filename;
      $name = $_FILES['Filedata']['tmp_name'];
      
      if (move_uploaded_file($name, $saveFile)) {

      }else{

      }
    }
    Yii::app()->end();
  }
  */
?>