# Kazyumaru\Papersize
主な用紙のサイズを出力するPHPスクリプトです。
日本で使用されている用紙をだいたいカバーしました。
This PHP script returns the size of major paper scheet.

# Requirement
PHP >= 7.2
確認できた環境が上記ですが、特に複雑な処理は行なっていないので
composerを使用しない手動での導入であればPHP5.6などでも動作すると
思われます。

# usage
composerでインストールする場合は
composer require kazyumaru/papersize

使いたいファイルの冒頭でincludeします。
include('papersize.php');
composerの場合は
require('vendor/autoload.php');
です。

用紙サイズのクラスは下記のように使います。
$papersize = new Kazyumaru\Papersize;

用紙サイズなどを下記のように設定します。
$paperinfo = $papersize->set((string)$size,(string)$orientation,(string)$unit);

$size 用紙サイズです。
A10〜A0、B10〜B0、ISOB5、Letter、Legal、Tabroid、名刺が呼び出せます。
用紙の指定は名刺がbcardです。
A4やISOB5は、a4やisob5でも呼び出せます。
日本国内で通常使用しているB5はB5,b5,JISB5,jisb5のいずれでも呼び出せます。
LetterやLegalなどは、LETTERでもlegalでも呼び出せます。

$orientation 紙の向きです。
省略可です。省略時はp（縦に長いportrate）です。
  縦に長いとき Pまたはp
  横に長いとき Lまたはl

$unit 単位です。
省略可です。省略時はmm（ミリメートル）です。

次の単位に変換できます。
  inch,pt,q,cm
ただし、全てmmからの計算のため、若干の誤差のある値であることをご承知おきください。

返り値を格納する$paperinfo はObjectです。

横幅 (float/int)$paperinfo->width

縦幅 (float/int)$paperinfo->height

用紙サイズ (string)$paperinfo->size

単位 (string)$paperinfo->unit

向き (string)$paperinfo->orientation


# note
I don't test environments under Windows.
Windows上のApacheでは確認していませんが、動くと思います。

# Author
りこ（Kazyumaru）
Twitter @developer_riko

# License
kazyumaru\PaperSize is under [MIT licence] (https://w.wiki/3DyM)

Thank you.
