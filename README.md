# Kazyumaru\Papersize
主な用紙のサイズを出力するPHPスクリプトです。
This PHP script returns the size of major paper scheet.

# Requirement
PHP >= 7.2

# usage
使いたいファイルの冒頭でincludeします。
include('papersize.php');

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

返り値の$paperinfo はObjectです。
横幅 (float/int)$paperinfo->width
縦幅 (float/int)$paperinfo->height
用紙サイズ (string)$paperinfo->size
単位 (string)$paperinfo->unit
向き (string)$paperinfo->orientation

# note
I don't test environments under Windows.

# Author
なーたん（Kazyumaru）
Twitter @pancakemagic

# License
kazyumaru\PaperSize is under [MIT licence] (https://w.wiki/3DyM)

Thank you.