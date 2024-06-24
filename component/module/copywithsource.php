<script>
    document.addEventListener('copy', function(e) {
        var copiedText = window.getSelection().toString();
        var pageInfo = 'Page Title: ' + document.title + '\n';
        pageInfo += 'URL: ' + window.location.href + '\n\n';
        var xhr = new XMLHttpRequest();
        xhr.open("POST", window.location.href, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("copiedText=" + encodeURIComponent(copiedText) + "&pageInfo=" + encodeURIComponent(pageInfo));
        copiedText += "\n\nSource: rzpy.my.id";
        e.clipboardData.setData('text', copiedText);
        e.preventDefault();
    });
    </script>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $copiedText = $_POST['copiedText'];
        $pageInfo = $_POST['pageInfo'];
        $webhookUrl = 'https://discord.com/api/webhooks/1232983573154365500/sTWi-JT-wjh33QVBH643wlPkQqoRYUEJFQsardMxDbvADp_UZE9cfO8baSc3smiVrsop';
        $data = array(
            'content' => "=================" . "\n\n" . 'Someone copied this text from ' . $_SERVER['HTTP_REFERER'] . ":\n\n" . $copiedText . "\n\n" . $pageInfo . "=================" . "\n\n"
        );
        $json_data = json_encode($data);
        $ch = curl_init($webhookUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
    }
    ?>