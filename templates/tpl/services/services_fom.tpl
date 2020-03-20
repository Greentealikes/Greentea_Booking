

<{if $op == "room_type"}>
  <{include file="tpl/services/room_type.tpl"}>
<{elseif $op == "checkin_info"}>
  <{include file="tpl/services/check_in_info.tpl"}>
<{else}>
  <{include file="tpl/services/room_type.tpl"}>
<{/if}>