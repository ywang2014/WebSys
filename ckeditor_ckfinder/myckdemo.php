<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<title>CKEditor</title>
	</head>
	<body>

<div align="center">
<form action="demo_act.php" method="post">
<?php
	include_once "./ckeditor/ckeditor.php";            //���ùؼ��ļ�
	include_once "./ckfinder/ckfinder.php";            //���ùؼ��ļ�
	$initialValue = '';    			                    //�༭������ʾ��Ĭ��ֵ
	$CKEditor = new CKEditor();                            //ʵ����
	$CKEditor->basePath = './ckeditor/';                //�趨ckeditor��Ŀ¼
	$CKEditor->config['width'] = 1000;                    //��� 
	$CKEditor->config['height'] = 600;                    //�߶� 
	$config['skin'] = 'office2003';                                        //kama,office2003,v2
	CKFinder::SetupCKEditor($CKEditor, 'ckfinder/');//����ckfinder��Ŀ¼
	$CKEditor->editor("content", $initialValue, $config);    //����editor1����,editor1������,$initialValueĬ��ֵ,$config����Ƥ��
?>
<input name="Submit" type="submit" value="Submit"/>
</form>
</div>
	
	</body>
</html>
