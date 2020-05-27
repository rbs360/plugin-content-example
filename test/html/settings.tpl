
{css static}
<link href="$app_path/css/#name.css" rel="stylesheet" media="all" />
{/css}
{js static}
<script type="text/javascript" src="$app_path/js/#name.js"></script>
{/js}
#include <fields>
#include <container>
 
[[css | name: style]]


{CALLBACK_LINK}
<div class="ui green message font-rel">
  $link
</div>
{/CALLBACK_LINK}

[[js | name: main]] 
