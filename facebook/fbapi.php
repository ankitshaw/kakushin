<?php
require_once 'src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1957669851179221',
  'app_secret' => '211f89bfc03c3f72c07ecb207003fcd2',
  'default_graph_version' => 'v2.10',
  ]);

$posts = [
	//'link' => 'www.google.com',
	'message' => 'Test3 fb api with image...',
	'source' => $fb->fileToUpload('C:\Users\hp\Downloads\L.U.V.png'),
  ];

try {
	//$response = $fb->post('/831158530365768/feed', $posts, 'EAAb0fYgRKNUBALib8omTM7ajZAarwvCevuoIjuzDoJQ3ulEshnCNYB2p09inIxJ0WyLZBUEoMO1V3K01Es7WlBfJVT6dzojjAtrpnKbdkuejhrS5seuCdJwpS81bZAx7oZBD29f9QyAtth63MtOpe5F8METttGUTcMaSwn5Ms8bZBzWJNpmTRdcJJl7ekZBl9jvl5G2BgYaAZDZD');
	$response = $fb->post('/831158530365768/photos', $posts, 'EAAb0fYgRKNUBALib8omTM7ajZAarwvCevuoIjuzDoJQ3ulEshnCNYB2p09inIxJ0WyLZBUEoMO1V3K01Es7WlBfJVT6dzojjAtrpnKbdkuejhrS5seuCdJwpS81bZAx7oZBD29f9QyAtth63MtOpe5F8METttGUTcMaSwn5Ms8bZBzWJNpmTRdcJJl7ekZBl9jvl5G2BgYaAZDZD');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

echo 'Posted with id: ' . $graphNode;

?>