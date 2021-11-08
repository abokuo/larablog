<h2>標題：{{ $mailDetails['subject'] }}</h2>
<p>訪客：{{ $mailDetails['guest'] }}</p>
<p>時間：{{ $mailDetails['contactTime'] }}</p>
<p>內容：</p>
{!! $mailDetails['message']  !!}
