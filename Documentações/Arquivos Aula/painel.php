<?php
session_start();

if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "index.php?erro=1";
    </script>
    <?php
} else {
    ?>

    <!doctype html>
    <html lang="pt-br">
        <head>
            <title>.::Painel - logSystem::.</title>
            <meta chartset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css" meida="all" />
        </head>

        <body>
            <div class="dvCentro">
                <div class="dvTopo">
                    <a href="?acao=sair"><img class="imgLogout" src="img/close.png" alt="Sair" /></a>
                    <img src="img/logo.png" alt="logSystem" />
                </div>
                <div style="clear:both;"></div>
                <br />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, erat at ornare ornare, elit eros consectetur nisi, cursus luctus nulla elit nec justo. Maecenas nisl arcu, sagittis in mattis at, ornare sed sapien. Sed semper maximus magna in semper. Nam ante ex, egestas in bibendum sed, volutpat in quam. Mauris non pulvinar quam, ut aliquet neque. Sed molestie libero id purus eleifend, eget luctus enim varius. In ligula diam, porttitor ut nibh eget, sagittis rutrum risus. In semper sollicitudin enim eget ornare. Donec vitae eros leo. Praesent et tristique mauris. Vestibulum tincidunt eget justo et malesuada. Phasellus et elit massa. Nunc vitae ante viverra, luctus nunc nec, ullamcorper nisi. Cras elementum nisl quam, sodales efficitur odio sodales non. Mauris in ligula sagittis, pellentesque massa vel, consequat metus. Sed egestas dolor ullamcorper leo consequat, ac pellentesque turpis semper.</p>
                <br />
                <p>In non ligula id lectus interdum lobortis. Nam nec mauris a magna venenatis scelerisque non eget massa. Sed nec lacus sed purus laoreet pharetra. Cras molestie felis ac mauris tincidunt fringilla. Nunc nec arcu sed justo sollicitudin faucibus quis sed sapien. Aliquam suscipit lacus vel nisi efficitur, quis luctus lacus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris pellentesque justo scelerisque, interdum sem a, posuere mi. Donec sed cursus sem, at gravida magna. Nulla massa ligula, finibus id ex non, sollicitudin varius odio. Vestibulum fringilla, risus iaculis laoreet blandit, tortor dolor blandit nibh, nec ornare lacus erat quis ipsum. Nunc malesuada et mi vel rutrum. Vestibulum posuere commodo nulla et mollis. Donec neque justo, malesuada at elementum sed, mollis aliquet nulla.</p>
                <br />
                <p>Phasellus sed imperdiet sem. Morbi cursus et enim et faucibus. Nunc consectetur scelerisque dui quis placerat. Suspendisse sed felis massa. Donec et sapien vulputate, posuere velit in, elementum elit. Nunc faucibus laoreet nisl non molestie. Maecenas semper ante nisi, in volutpat mi elementum et. Sed eu consectetur nunc. Proin in suscipit metus. Proin ut ligula laoreet, vulputate metus at, convallis leo. Fusce vitae pellentesque sem. Quisque mattis risus quis facilisis sollicitudin. Morbi euismod tempus sapien id accumsan. Nunc sagittis quis orci at sagittis. Maecenas aliquet dui et urna mattis gravida. Vestibulum velit dolor, venenatis non lorem ac, faucibus luctus tortor.</p>
                <br />
                <p>Vivamus fermentum iaculis sem eu finibus. Vestibulum eget ultricies justo. Phasellus sem nisl, rhoncus consequat tempor a, porta sed magna. Morbi quis urna facilisis, bibendum mi ac, vulputate sapien. Fusce elementum pharetra orci, non condimentum dui sodales id. Maecenas varius ante vitae risus porta imperdiet. Morbi justo sapien, pulvinar eu nunc nec, mollis consectetur libero. Donec egestas tincidunt eros, ac pretium velit efficitur nec. Cras vehicula, lacus ac ultricies porttitor, magna orci viverra nisi, at aliquam tellus leo vel risus.</p>
                <br />
                <p>Nunc at malesuada lacus. Aenean posuere pellentesque ante eu feugiat. In in facilisis quam. Aenean eu tellus nec augue pellentesque congue eget eget purus. Vivamus pulvinar a risus vel dignissim. Morbi in lobortis mauris. Nullam egestas pharetra libero, quis dapibus orci venenatis a. Fusce eleifend, massa id gravida hendrerit, massa nisl volutpat dolor, sed tempus massa enim non dolor. Sed et ligula quis elit fringilla aliquam vitae vitae massa. Donec nisi libero, posuere eu commodo eget, molestie et eros. Fusce ac lobortis felis. Vivamus vehicula porttitor aliquet. Cras ut turpis non velit mattis gravida eget quis erat. Nullam ac turpis rutrum, semper arcu et, accumsan nibh. Donec tincidunt pretium mauris id egestas.</p>
            </div>
        </body>
    </html>

    <?php
}

if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "index.php?erro=2";
        </script>
        <?php
    }
}
?>