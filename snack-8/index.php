<?php 
/*  Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
   
*/
$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam necessitatibus assumenda tenetur voluptas repellat inventore temporibus debitis laudantium, pariatur fugit neque ratione odit recusandae, corporis culpa. Repudiandae aut sit veniam. vel ad laboriosam enim voluptates. Consequuntur magni quod reiciendis maxime non corrupti perspiciatis dolore, sit eos beatae esse dignissimos, eveniet eius nesciunt est nemo at odit. Nemo doloremque vero ratione aut ad natus inventore veniam laboriosam voluptatibus!. Nihil debitis placeat rerum enim, nemo expedita laboriosam tempore laudantium odit consequuntur. Iusto natus quisquam quasi hic perferendis quam delectus totam labore adipisci repellat doloremque, amet beatae necessitatibus, dolores quas optio. Eius repellat aliquam cum fugit expedita quibusdam corporis libero recusandae, deserunt quas nobis magni amet impedit doloribus placeat aperiam dolor maiores provident debitis vero. Recusandae ea quis neque perspiciatis. consectetur illum non nihil laborum ab voluptatum voluptate provident qui assumenda, ex facere quisquam minus numquam cupiditate fuga aperiam, mollitia minima aliquam tempora. Minus deserunt voluptates at suscipit architecto quidem iure quae molestiae quia! Accusantium excepturi, in aperiam corporis soluta laboriosam, tempora assumenda et molestiae sapiente enim rem repellat. Voluptate quia, quos cupiditate molestias natus cum nesciunt ex, repellendus sint numquam veniam cumque explicabo sapiente dolor facere illum culpa distinctio, eligendi ad perspiciatis voluptatum aperiam! Ipsum animi provident vel veniam facere possimus, vero ipsa sit nam mollitia reiciendis laudantium fugit ducimus aperiam excepturi distinctio, perferendis nesciunt exercitationem necessitatibus pariatur fugiat voluptas! Facilis illo et dolorum deleniti. ut modi aliquid rem provident voluptate, mollitia possimus nulla sit officiis vero molestiae beatae animi nostrum, delectus reiciendis magnam. In quis explicabo maxime exercitationem perspiciatis ea illo ducimus esse architecto, nam aperiam animi recusandae magni, id non dolores odit dignissimos excepturi nisi beatae placeat ipsam, molestiae obcaecati. Tenetur, saepe quasi ipsam voluptatum maiores culpa tempora perspiciatis magnam labore quas qui illo iusto mollitia exercitationem. Consequuntur, itaque est.';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-8</title>
</head>
<body>
       
    <?php foreach(explode('.', $paragraph) as $p) : ?>
        
        <p>
            <?= $p ?>
        </p>

    <?php endforeach ?>

</body>
</html>