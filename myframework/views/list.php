<form action="/crud/addAction" method="POST">
    <input type="text" id="name" name="name" placeholder="Add Fruit" />
    <input type="submit" />
</form>

<?foreach($data['fruit'] as $item){?>

<li><?=$item["name"]?>
<a href="/crud/update?id=<?=$item["id"]?>">UPDATE</a>
<a href="/crud/deleteAction?id=<?=$item["id"]?>">DELETE</a>
</li>
<?}?>

</ul>