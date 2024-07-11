<?php
include_once ("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="Programando em PHP">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt ducimus
            perspiciatis excepturi temporibus! Consequatur, sed in tempore dicta sit animi iste odio non consequuntur,
            dolorum, ad quia accusantium quo?
            Molestias totam consectetur omnis in ab deleniti repellat quidem accusantium reiciendis, neque hic ut
            cupiditate fugiat rem. Sapiente architecto debitis ipsa deleniti iste eligendi ullam sint blanditiis dolore,
            dolorum adipisci!
            Commodi, nostrum quaerat? Sit enim eaque, odio sequi ea pariatur, explicabo cum porro illo voluptate
            voluptates eos, magnam distinctio! Optio ex modi iusto dolorem, sed possimus earum accusantium harum
            commodi?
            Tempore quasi quis officiis quas, suscipit quia labore incidunt fuga! Asperiores sapiente possimus amet
            deserunt ad facilis vel cum, dolorem magnam eum, vitae velit soluta ut quia quisquam. Officia, temporibus!
            Itaque, recusandae quo, mollitia nulla repellendus aspernatur hic eligendi temporibus neque, necessitatibus
            praesentium. Adipisci veritatis accusantium possimus corrupti, dignissimos ex non est minima cum saepe,
            dicta ipsum esse, accusamus quas.
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt ducimus
            perspiciatis excepturi temporibus! Consequatur, sed in tempore dicta sit animi iste odio non consequuntur,
            dolorum, ad quia accusantium quo?
            Molestias totam consectetur omnis in ab deleniti repellat quidem accusantium reiciendis, neque hic ut
            cupiditate fugiat rem. Sapiente architecto debitis ipsa deleniti iste eligendi ullam sint blanditiis dolore,
            dolorum adipisci!
            Commodi, nostrum quaerat? Sit enim eaque, odio sequi ea pariatur, explicabo cum porro illo voluptate
            voluptates eos, magnam distinctio! Optio ex modi iusto dolorem, sed possimus earum accusantium harum
            commodi?
            Tempore quasi quis officiis quas, suscipit quia labore incidunt fuga! Asperiores sapiente possimus amet
            deserunt ad facilis vel cum, dolorem magnam eum, vitae velit soluta ut quia quisquam. Officia, temporibus!
            Itaque, recusandae quo, mollitia nulla repellendus aspernatur hic eligendi temporibus neque, necessitatibus
            praesentium. Adipisci veritatis accusantium possimus corrupti, dignissimos ex non est minima cum saepe,
            dicta ipsum esse, accusamus quas.
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt ducimus
            perspiciatis excepturi temporibus! Consequatur, sed in tempore dicta sit animi iste odio non consequuntur,
            dolorum, ad quia accusantium quo?
            Molestias totam consectetur omnis in ab deleniti repellat quidem accusantium reiciendis, neque hic ut
            cupiditate fugiat rem. Sapiente architecto debitis ipsa deleniti iste eligendi ullam sint blanditiis dolore,
            dolorum adipisci!
            Commodi, nostrum quaerat? Sit enim eaque, odio sequi ea pariatur, explicabo cum porro illo voluptate
            voluptates eos, magnam distinctio! Optio ex modi iusto dolorem, sed possimus earum accusantium harum
            commodi?
            Tempore quasi quis officiis quas, suscipit quia labore incidunt fuga! Asperiores sapiente possimus amet
            deserunt ad facilis vel cum, dolorem magnam eum, vitae velit soluta ut quia quisquam. Officia, temporibus!
            Itaque, recusandae quo, mollitia nulla repellendus aspernatur hic eligendi temporibus neque, necessitatibus
            praesentium. Adipisci veritatis accusantium possimus corrupti, dignissimos ex non est minima cum saepe,
            dicta ipsum esse, accusamus quas.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $categoria): ?>
                <li><a href="#"><?= $categoria ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once ("templates/footer.php");
?>