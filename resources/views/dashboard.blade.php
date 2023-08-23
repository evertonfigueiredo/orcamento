@extends('layouts.app')

@section('template_title')
    Dashboard
@endsection

@section('content')
    <h1>Sistema de Gerenciamento de Produtos e Orçamentos</h1>

    <p>O Sistema de Gerenciamento de Produtos e Orçamentos é uma aplicação web, que
        oferece funcionalidades para gerenciar produtos, cores, categorias e orçamentos. O sistema permite que os usuários
        façam o cadastro de produtos, associando-os a cores e categorias específicas. Além disso, os usuários podem criar
        orçamentos contendo diversos produtos e calcular automaticamente o valor total do orçamento.</p>

    <h2>Principais Funcionalidades:</h2>

    <ol>
        <li><strong>Gerenciamento de Produtos:</strong> Os usuários podem cadastrar novos produtos na aplicação, fornecendo
            informações como nome, valor e associando o produto a uma cor e categoria específica. O sistema permite uma
            visualização completa dos produtos cadastrados, incluindo suas características.</li>
        <li><strong>Gerenciamento de Cores e Categorias:</strong> O sistema oferece a capacidade de cadastrar cores e
            categorias, que podem ser associadas aos produtos. Isso ajuda a organizar os produtos de acordo com suas
            características específicas.</li>
        <li><strong>Criação de Orçamentos*:</strong> Os usuários podem criar orçamentos, selecionando produtos disponíveis e
            definindo as quantidades desejadas. O sistema calcula automaticamente o valor total do orçamento com base nos
            produtos selecionados e suas quantidades.</li>
        <li><strong>Fluxo de Trabalho Intuitivo:</strong> O sistema oferece uma interface amigável que permite aos usuários
            navegar facilmente entre as diferentes seções, realizar ações como adicionar produtos, criar orçamentos e
            associar cores e categorias. As validações garantem a integridade dos dados inseridos.</li>
        <li><strong>Autenticação e Autorização*:</strong> O sistema inclui um sistema de autenticação que permite que os
            usuários façam login em suas contas individuais. As políticas de autorização controlam o acesso a recursos
            específicos com base nas regras definidas.</li>
        <li><strong>Layout Responsivo:</strong> A interface do usuário é projetada para ser responsiva, se adaptando a
            diferentes tamanhos de tela, garantindo uma experiência de usuário consistente em dispositivos móveis e desktop.
        </li>
    </ol>

    <p>O Sistema de Gerenciamento de Produtos e Orçamentos foi desenvolvido com base nas melhores práticas e
        oferece uma solução completa para o gerenciamento eficiente de produtos, cores, categorias e orçamentos. Com uma
        interface amigável e funcionalidades essenciais, ele é adequado para empresas e profissionais que precisam manter um
        controle organizado sobre seus produtos e orçamentos.</p>

    <p><strong>* Alguns desses topicos ainda estão em desenvolvimento.</strong></p>
    <p><strong>Desenvolvido por Everton Figueiredo</strong></p>
@endsection
