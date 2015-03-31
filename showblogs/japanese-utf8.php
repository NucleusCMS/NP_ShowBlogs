<?php
	define('_SHOWB_DESC',   '&lt;%blog%&gt;、&lt;%archive%&gt;を置き換えるプラグインです。<br />'
						  . '全ブログ、または任意のブログをページスイッチつきで表示します<br />'
						  . 'NP_MultipleCategories v0.15 以降のマルチカテゴリ、およびNP_TagEX に対応しています<br />'
						  . 'Usage: &lt;%ShowBlogs(default/index, 15, all, 2, DESC, 6/15/56/186, default/stick)%&gt;');
	define('_CAT_FORMAT',   'カテゴリー名の表示形式');
//	define('_CATNAME_SHOW', 'オールブログモードの時のカテゴリー名の表示形式'
//						  . '(0:｢カテゴリ名 on ブログ名｣, 1:カテゴリ名のみ, 2:ブログ名のみ)');
	define('_STICKMODE',    'カレントブログモードの時に表示する固定表示アイテム');
//	define('_STICKMODE',    'カレントブログモードの時に表示する固定表示アイテム'
//						  . '(0:全て表示する, 1:表示中のブログに所属するもののみ)');
	define('_ADCODE_1',     '1番目と2番目に表示されるアイテムの間に表示する広告のコード');
	define('_ADCODE_2',     '2番目と3番目に表示されるアイテムの間に表示する広告のコード');
	define('_TAG_MODE',     'NP_TagEX 使用時のページスイッチのモード');
	define('_SB_NEXTL',     '次のページへのリンクテキスト');
	define('_SB_PREVL',     '前のページへのリンクテキスト');
	define('_SB_NEXTSEP',   '次のページへのリンクテキストの前に表示するセパレータ');
	define('_SB_PREVSEP',   '前のページへのリンクテキストの後に表示するセパレータ');
	define('_SB_PAGESEP2',  'タイプ2のページスイッチのページ同士の間に表示するセパレータ');
	define('_SB_PAGESEP3',  'タイプ3のページスイッチのページ同士の間に表示するセパレータ');
	define('_SB_PGLSTHDR',  'ページへのリンクのリストの前に表示するヘッダ');
	define('_SB_PGLSTFTR',  'ページへのリンクのリストの後に表示するフッタ');
	define('_SB_PGPREFIX',  '各ページへのリンクの前に付加するプリフィックス');
	define('_SB_PGSUFFIX',  '各ページへのリンクの後に付加するサフィックス');
	define('_SB_PAGEDOTS',  'ページスイッチでページを省略表示するテキスト');
	define('_SB_CURPGPRF',  '現在表示中のページ番号の前に付加するプリフィックス');
	define('_SB_CURPGSUF',  '現在表示中のページ番号の後に付加するサフィックス');		
	define('_TAG_SELECT',   '全ブログの tag を表示|0|'
						  . '表示中のブログに属する tag のみ表示|1|'
						  . '表示中のカテゴリ・サブカテゴリに属する tag のみ表示|2');
	define('_STICKSELECT',  '表示中のブログにかかわらず全て表示|0|'
						  . '表示中のブログに属する固定アイテムのみ表示|1|');
?>