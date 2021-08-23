<h1 class="text-center"><?=$produto['nome'];?></h1>

<?php if(isset($produto) && !empty($produto)): ?>
<main class="produto">
    <article class="card-produto">
        <div class="card-produto-header">
            <img class="produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
        </div>
        <div class="card-produto-body">
            <p class="text-center font-lg"><?=$produto['descricao'];?></p>
        </div>
    </article>
</main>

<section class="row">
    <div class="voltar">
        <a href="?page=home" class="btn btn-primary">Voltar</a>
    </div>
</section>


<?php endif; ?>
