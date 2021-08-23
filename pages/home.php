<h1 class="text-center">Home</h1>
<section class="row mt-3 mb-3">
    <article class="sobre-nos">
        <div class="foto">
            <img src="images/home.jpg" class="sobre-nos-img" alt="Sobre Nós">
        </div>
        <div class="content">
            <p>Nascemos em plena pandemina com o objetivo de gerar uma <br>
                renda extra e acabamos conquistando muitos corações <br>
                com nossos brigadeiros feitos com muito amor e carinho.<br>
                Os insumos utilizados são selecinados para que o cliente <br>
                possuam uma experiência maravilhosa. <br>
                Temos opções veganas também. <br>
                Monte sua caixinha!</p> 
        </div>
    </article>
</section>

<div class="row">
    <h1 class="text-center mb-3">Produtos</h1>
    <section class="produtos">
        <?php foreach ($produtos as $produto): ?>
                <article class="card-produto">
                    <div class="card-produto-header">
                    <img class="img-responsive produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
                        <a href="?page=produto&id=<?=$produto['id'];?>"><div class="card-title"><h4><?=$produto['nome'];?></h4></div></a>
                        <a href="?page=produto&id=<?=$produto['id'];?>" class="btn btn-primary">Detalhes</a>
                    </div>
                    
                </article>
        <?php endforeach; ?>
    </section>
</div>
