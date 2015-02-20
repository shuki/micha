{assign var="rows_count" value=count($data)}
{assign var="i" value="0"}
{foreach from=$data key=k item=row}
{assign var="i" value=$i+1}
<span class="title">
{$row->creation_date_fmt}<br>
{if $row->title}{$row->title}<br>{/if}
{if $row->name}<span style="color:black;">מאת: </span>{$row->name}<br>{/if}
</span>
{$row->body}
{if $row->link}<a href="{$row->link}" target="_top">קישור</a>{/if}
{if $i < $rows_count}<br><br><br>{/if}
{/foreach}

