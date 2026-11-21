<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $local_entrega = trim($_POST["local_entrega"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $produto = trim($_POST["produto"] ?? "");
    $texto = trim($_POST["mensagem"] ?? "");

    if ($nome != "" && $telefone != "" && $produto != "" && $texto != "") {

        $arquivo = fopen(__DIR__ . "/contatos.txt", "a");

        if ($arquivo) {

            $dados = "Nome: " . $nome . "\n";
            $dados .= "Local de entrega: " . $local_entrega . "\n";
            $dados .= "Telefone: " . $telefone . "\n";
            $dados .= "Produto: " . $produto . "\n";
            $dados .= "Mensagem: " . $texto . "\n";
            $dados .= "--------------------------\n";

            fwrite($arquivo,$dados);
            fclose($arquivo);

            $mensagem = "Solicitação enviada com sucesso!";

        } else {
            $mensagem = "Erro ao salvar sua solicitação.";
        }

    } else {
        $mensagem = "Preencha os campos obrigatórios.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMV Eucaliptos Tratados</title>
    <link rel="stylesheet" href="style.css?v=3">
    <link rel="shortcut icon" href="imagens/logo.jfif" type="image/x-icon">
</head>
<body>
    <header class="reto">
        <nav class="header">
            <div class="logo">
                <img src="imagens/logo.jfif" alt="Logo JMV Eucaliptos Tratados">
                <h1>JMV Eucaliptos <span>Tratados</span></h1>
            </div>

            <ul class="passar">
                <li><a href="#inicio">Página inicial</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#vantagens">Vantagens</a></li>
                <li><a href="#aplicacoes">Aplicações</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>

            <div>
                <ul class="Orcamento">
                    <li>
                        <a href="#contato">Solicitar Orçamento</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="principal" id="inicio">
            <div class="coluna-texto">

                <p class="chamada">
                    <span class="linha"></span>
                    MADEIRA QUE DURA DÉCADAS
                </p>

                <h2>
                    Eucalipto
                    <span>tratado</span>
                    de qualidade
                </h2>

                <p class="descricao">
                    Fornecemos mourões, escoras, vigas e postes de
                    eucalipto com tratamento - para construção civil, cercamento rural e
                    infraestrutura que resiste ao tempo.
                </p>

                <div class="botoes">

                    <a href="#produtos" class="botao-produtos">
                        Ver Produtos →
                    </a>

                    <a href="#contato" class="botao-contato">
                        Solicitar Orçamento
                    </a>

                </div>

            </div>

            <div class="coluna-imagem">
                <img src="imagens/eucalipto 3.jfif" alt="Varanda de madeira de eucalipto tratado com rede" class="img2">
            </div>

        </section>

        <section class="experiencia">
            <div class="card">
                <h2>10</h2>
                <p>ANOS DE EXPERIÊNCIA</p>
            </div>

            <div class="card">
                <h2>10.000</h2>
                <p>CLIENTES ATENDIDOS</p>
            </div>

            <div class="card">
                <h2>98%</h2>
                <p>SATISFAÇÃO COMPROVADA</p>
            </div>
        </section>

        <section class="Linha-produtos" id="produtos">

            <div class="Produtos">
                <p class="chamada">
                    <span class="linha"></span>
                    Linha de produtos
                </p>
                <h1>Nossos Produtos</h1>
                <span class="linha2"></span>
            </div>

            <div class="Produtos-cards">

                <div class="Produtos-conteudo">
                    <img src="imagens/mouroes.jpg" alt="Mourão de eucalipto tratado">
                    <h3>CERCAMENTO RURAL</h3>
                    <h2>Mourão</h2>
                    <p>Mourões para cercas de alta durabilidade, resistentes a cupins e intempéries.</p>
                </div>

                <div class="Produtos-conteudo">
                    <img src="imagens/eucalipto 3.jfif" alt="Escora de eucalipto tratado">
                    <h3>CONSTRUÇÃO CIVIL</h3>
                    <h2>Escora</h2>
                    <p>Escoramento esbelto e resistente para lajes e estruturas provisórias em obras.</p>
                </div>

                <div class="Produtos-conteudo">
                    <img src="imagens/eucalipto 2.jfif" alt="Viga serrada de eucalipto tratado">
                    <h3>ESTRUTURA E COBERTURA</h3>
                    <h2>Viga Serrada</h2>
                    <p>Vigas serradas de eucalipto citriodora, excelente relação resistência/peso para telhados e coberturas.</p>
                </div>

                <div class="Produtos-conteudo">
                    <img src="imagens/poste.jpg" alt="Poste de eucalipto tratado">
                    <h3>TRANSMISSÃO E REDES</h3>
                    <h2>Poste</h2>
                    <p>Proteção contra fungos, cupins e outros agentes deterioradores.</p>
                </div>

            </div>

        </section>

        <section id="vantagens" class="vantagens">
            <div class="escolha__container_vantagens">
                <div class="escolha_texto_vantagens">
                    <p class="chamada">
                        <span class="linha"></span>Vantagens
                    </p>

                    <h2>Da <span class="melhor_vantagens">melhor</span> distribuidora para os <span class="melhor_vantagens">melhores</span> projetos</h2>
                    <p>O tratamento preservativo transforma o eucalipto em uma das madeiras mais versáteis e duráveis disponíveis no mercado brasileiro, com custo inferior ao de madeiras nativas.</p>
                    <img src="imagens/casamadeira.jfif.png" alt="Casa de madeira de eucalipto">
                </div>

                <ul class="escolha__lista_vantagens">
                    <li class="item_vantagens">
                        <span class="item__numero_vantagens">01</span>
                        <div class="item__conteudo_vantagens">
                            <h3>Durabilidade Superior</h3>
                            <p>Até 25 anos de vida útil no solo. O tratamento sob pressão com CCA penetra profundamente nas fibras da madeira, oferecendo proteção real contra fungos, cupins e brocas marinhas.</p>
                        </div>
                    </li>
                    <li class="item_vantagens">
                        <span class="item__numero_vantagens">02</span>
                        <div class="item__conteudo_vantagens">
                            <h3>Sustentabilidade Certificada</h3>
                            <p>Nossas florestas plantadas são manejadas com responsabilidade. Cada peça vendida financia o reflorestamento — carbono neutro na cadeia de produção.</p>
                        </div>
                    </li>
                    <li class="item_vantagens">
                        <span class="item__numero_vantagens">03</span>
                        <div class="item__conteudo_vantagens">
                            <h3>Resistência Mecânica</h3>
                            <p>O eucalipto tratado supera muitas madeiras nativas em módulo de elasticidade e resistência à compressão, sendo ideal para estruturas que exigem desempenho.</p>
                        </div>
                    </li>
                    <li class="item_vantagens">
                        <span class="item__numero_vantagens">04</span>
                        <div class="item__conteudo_vantagens">
                            <h3>Entrega Ágil</h3>
                            <p>Estoque permanente e frota própria para entrega em toda a região. Prazo médio de 48 horas para pedidos locais.</p>
                        </div>
                    </li>
                </ul>

            </div>
        </section>

        <section class="secao" id="aplicacoes">
            <div class="aplicacoes-conteudo">

                <p class="aplicacoes-etiqueta">ONDE APLICAR</p>
                <h2>Aplicações</h2>
                <p class="aplicacoes-descricao">
                    O eucalipto tratado pode ser usado em diferentes projetos.
                    Consulte a JMV para saber quais produtos e medidas estão disponíveis.
                </p>

                <div class="aplicacoes-grid">
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🌤️</span>
                        <h3>Pergolado</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🏡</span>
                        <h3>Rancho</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🪵</span>
                        <h3>Cerca</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🛝</span>
                        <h3>Parquinho</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">⚡</span>
                        <h3>Postes de energia</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🌿</span>
                        <h3>Paisagismo</h3>
                    </div>
                    <div class="aplicacao-card">
                        <span class="aplicacao-icone" aria-hidden="true">🌉</span>
                        <h3>Pontes</h3>
                    </div>
                </div>

                <h3 class="processo-titulo">Como comprar na JMV</h3>
                <div class="processo-etapas">
                    <div class="processo-etapa">
                        <span class="processo-numero">01</span>
                        <h3>Escolha da Madeira</h3>
                        <p>Conheça as opções de eucalipto tratado para diferentes projetos.</p>
                    </div>
                    <div class="processo-etapa">
                        <span class="processo-numero">02</span>
                        <h3>Medidas e Aplicações</h3>
                        <p>Consulte as medidas disponíveis e escolha a opção adequada para seu uso.</p>
                    </div>
                    <div class="processo-etapa">
                        <span class="processo-numero">03</span>
                        <h3>Orçamento</h3>
                        <p>Entre em contato com a JMV para consultar preços e disponibilidade.</p>
                    </div>
                    <div class="processo-etapa">
                        <span class="processo-numero">04</span>
                        <h3>Compra</h3>
                        <p>Combine os detalhes da compra e a forma de receber seu pedido com a loja.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="sobre" id="sobre">

            <div class="sobre-conteudo">

                <p class="sobre-etiqueta">CONHEÇA NOSSA EMPRESA</p>

                <h2>Sobre a JMV Eucaliptos Tratados</h2>

                <p>
                    A JMV Eucaliptos Tratados atua no fornecimento de
                    madeira de eucalipto tratado, oferecendo soluções
                    para diferentes necessidades, desde projetos rurais
                    até construções e estruturas.
                </p>

                <p>
                    Trabalhamos com produtos como mourões, escoras,
                    vigas e postes, buscando oferecer materiais de
                    qualidade, durabilidade e resistência para nossos
                    clientes.
                </p>

                <p>
                    Nosso objetivo é atender cada cliente com
                    responsabilidade, dedicação e atenção às suas
                    necessidades, contribuindo para a realização de
                    projetos seguros, duradouros e únicos.
                </p>

                <div class="sobre-diferenciais">

                    <div>
                        <h3>Qualidade</h3>
                        <p>Produtos selecionados para diferentes aplicações.</p>
                    </div>

                    <div>
                        <h3>Compromisso</h3>
                        <p>Atendimento focado nas necessidades dos clientes.</p>
                    </div>

                    <div>
                        <h3>Durabilidade</h3>
                        <p>Madeiras tratadas para uma maior resistência.</p>
                    </div>

                </div>

                <div class="sobre-imagem">
                    <img src="imagens/placa.jfif" alt="Placa da JMV Eucaliptos Tratados">
                </div>

            </div>

        </section>

        <section class="secao" id="contato">

            <div class="contato-container">

                <div class="contato-info">

                    <h2>Fale conosco</h2>

                    <h3>Solicite seu orçamento</h3>

                    <p>
                        Nossa equipe comercial responde em breve.
                        Informe o produto, as dimensões e a quantidade desejada
                        para um orçamento preciso.
                    </p>

                    <div class="contato-item">
                        <strong>Telefone</strong>
                        <p>(19) 3411-2439</p>
                    </div>

                    <div class="contato-item">
                        <strong>WhatsApp</strong>
                        <p>(19) 92104641</p>
                    </div>

                    <div class="contato-item">
                        <strong>E-mail</strong>
                        <p>jmveucaliptotratado@gmail.com</p>
                    </div>

                    <div class="contato-item">
                        <strong>Endereço</strong>
                        <p>Av comendador Luciano Guidotti - n 2615 - Bairro Jd California</p>
                        <p>CEP: 13424-696</p>
                    </div>

                </div>

                <div class="contato-formulario">

                    <h3>Solicite seu orçamento</h3>

                    <form method="POST" action="#contato" class="form-contato">

                        <label>Nome</label>
                        <input type="text" name="nome"
                               placeholder="Digite seu nome" required>

                        <label>Cidade/Local de entrega</label>
                        <input type="text" name="local_entrega"
                               placeholder="Informe sua cidade ou local de entrega" required>

                        <label>Telefone / WhatsApp</label>
                        <input type="tel" name="telefone"
                               placeholder="(00) 00000-0000" required>

                        <label>Produto de interesse</label>
                        <select name="produto" required>
                            <option value="">Selecione um produto</option>
                            <option value="Mourões">Mourões</option>
                            <option value="Escoras">Escoras</option>
                            <option value="Vigas Serradas">Vigas Serradas</option>
                            <option value="Postes">Postes</option>
                            <option value="Caibros">Caibros</option>
                            <option value="Pranchões">Pranchões</option>
                        </select>

                        <label>Mensagem</label>
                        <textarea name="mensagem"
                                  placeholder="Descreva o que você precisa..."
                                  required></textarea>

                        <button type="submit">Enviar Solicitação</button>

                    </form>

                    <p class="mensagem-retorno">
                        <?php echo htmlspecialchars($mensagem); ?>
                    </p>

                </div>

            </div>

        </section>

    </main>

    <footer>
        <div class="footer">

            <div class="footer-conteudo">

                <div class="logo2">
                    <div class="JMV">
                        <img src="imagens/logo.jfif" alt="Logo JMV Eucaliptos Tratados">
                        <h1>JMV Eucaliptos <span>Tratados</span></h1>
                    </div>
                    <div class="Informacao">
                        <p>Madeira de eucalipto tratada com qualidade e responsabilidade ambiental para construção e agronegócio.</p>
                    </div>
                </div>

                <div class="footer-coluna">
                    <h4>Navegação</h4>
                    <ul>
                        <li><a href="#inicio">Página inicial</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#vantagens">Vantagens</a></li>
                        <li><a href="#aplicacoes">Aplicações</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>

                <div class="footer-coluna">
                    <h4>Redes Sociais</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/eucaliptotratadopiracicaba/" target="_blank" rel="noopener">Instagram</a></li>
                        <li><a href="https://www.facebook.com/jubrev31/?ref=PROFILE_EDIT_xav_ig_profile_page_web" target="_blank" rel="noopener">Facebook</a></li>
                    </ul>
                </div>

            </div>

            <div class="footer-final">
                <p>© 2026 JMV Eucaliptos Tratados. Todos os direitos reservados.</p>
                <p>Créditos: Augusto Martins da Cruz · Carlos Eduardo Ferreira de Paula · Vitor Breviglieri dos Santos · Guilherme Mathias · Leonardo Elias Fernandes</p>
            </div>

        </div>
    </footer>

</body>
</html>