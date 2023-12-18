<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Portefolio</title>
</head>

<body class="bg-[#161513]">
    <header class="z-50">
        <nav class="px-4 lg:px-6 pt-4">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <div class="hidden mx-auto justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">Início</a>
                        </li>
                        <li>
                            <a href="#aboutme" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Sobre mim</a>
                        </li>
                        <li>
                            <a href="#projects" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Projetos</a>
                        </li>
                        <li>
                            <a href="#knowledge" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Conhecimentos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="flex flex-col min-h-screen items-center">
        <div class="mx-auto">
            <div class="mx-auto mb-[40px] mt-56 h-[213px] w-[213px] overflow-hidden rounded-full bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">
                <img src="imgs/pfp.png" alt=""/>
            </div>
            <h1 class="max-w-screen-md text-center text-[55px] font-extrabold text-white">
                Olá, sou o <span class="text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">Rodrigo Alves</span>!<br />
            </h1>
            <!-- <div class="text-center">
                <button class="text-gray-800 inline-block px-[30px] py-[16px] mr-[18px]  rounded-full font-semibold text-[22px]">Get In Touch</button>
                <button class="text-white inline-block px-[30px] py-[16px] bg-transparent border-2 rounded-full font-semibold text-[22px]">Download CV</button>
            </div> -->
        </div>
    </div>
    <div class="flex mb-20">
        <div class="mx-auto">
            <h1 class="max-w-screen-md text-center text-[55px] font-extrabold text-white">
                <span id="aboutme" class="text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">Sobre Mim</span><br />
            </h1>
                <p class=" mx-auto mt-[40px] mb-[54px] text-[18px] font-bold text-[#d5d5d5] text-center max-w-lg">
                Sou um estudante universitário apaixonado por tecnologia e programação. Sou de Ponte de Lima e estou atualmente a tirar a Licenciatura em Engenharia Informática na Universidade de Trás-os-Montes e Alto Douro.
            </p>
        </div>
    </div>
    <div class="flex mb-20">
        <div class="mx-auto">
            <h1 class="max-w-screen-md text-center text-[55px] font-extrabold text-white">
                <span id="projects" class="text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">Projetos</span><br />
            </h1>
        </div>
    </div>
    <div class="grid grid-cols-2">
        <div class="flex flex-col items-center justify-items-start mb-32 ml-10 col-start-1 col-end-1">
            <div class="flex w-full max-w-[48rem] flex-row rounded-xl bg-[#2c2a26] bg-clip-border text-gray-700 shadow-md">
                <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-clip-border text-white">
                    <img src="imgs/card1.png" alt="image" class="h-full w-full object-cover" />
                </div>
                <div class="p-6">
                    <h6 class="mb-4 block text-lg font-bold uppercase leading-relaxed tracking-normal text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] antialiased">
                        PAP
                    </h6>
                    <h4 class="mb-2 block text-2xl font-semibold leading-snug tracking-normal text-[#d5d5d5] antialiased">
                        Projeto de marcação de ausências de funcionários
                    </h4>
                    <p class="mb-8 block text-base font-normal leading-relaxed text-[#ffffff] antialiased">
                        Website desenvolvido em PHP, HTML, CSS e Javascript. Este website foi desenvolvido para a empresa onde estagiei, com o objetivo de facilitar a marcação de ausências dos funcionários.
                    </p>
                    <a class="inline-block" href="https://github.com/GoPokas/PAP" target="_blank">
                        <button class="animate-pulse flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle text-sm font-black uppercase text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] transition-all disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Visitar Projeto
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-items-start mb-32 ml-10 col-start-2 col-end-2">
            <div class="flex w-full max-w-[48rem] flex-row bg-clip-border text-gray-700">
                <div class="p-6">
                    <h6 class="mb-4 block text-lg font-bold uppercase leading-relaxed tracking-normal text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] antialiased">
                        Observações
                    </h6>
                    <p class="mb-8 block text-base font-normal leading-relaxed text-[#ffffff] antialiased mt-20">
                        Sem dúvida dos projetos mais complicados que fiz até hoje. Feito em ambito da PAP(Projeto de Aptidão Profissional), tive a sorte de poder trabalhar nele durante o meu estágio. Aprendi imenso com este projeto, desde a parte de desenvolvimento até à parte de gestão de tempo e de equipa.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-items-start mb-32 ml-10 col-start-1 col-end-1">
            <div class="flex w-full max-w-[48rem] flex-row bg-clip-border text-gray-700">
                <div class="p-6">
                    <h6 class="mb-4 block text-lg font-bold uppercase leading-relaxed tracking-normal text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] antialiased">
                        Observações
                    </h6>
                    <p class="mb-8 block text-base font-normal leading-relaxed text-[#ffffff] antialiased mt-20">
                        Um projeto desenvolvido em C, que consiste num jogo de tabuleiro, onde o objetivo é chegar ao fim do tabuleiro. Este projeto foi desenvolvido em ambito de laboratório, onde tive a oportunidade de voltar a visitar a linguagem C.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-items-start mb-32 ml-10 col-start-2 col-end-2">
            <div class="flex w-full max-w-[48rem] flex-row rounded-xl bg-[#2c2a26] bg-clip-border text-gray-700 shadow-md">
                <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none  bg-clip-border text-white">
                    <img src="imgs/card2.png" alt="image" class="h-full w-full object-cover" />
                </div>
                <div class="p-6">
                    <h6 class="mb-4 block text-lg font-bold uppercase leading-relaxed tracking-normal text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] antialiased">
                        Projeto de Laboratório
                    </h6>
                    <h4 class="mb-2 block text-2xl font-semibold leading-snug tracking-normal text-[#d5d5d5] antialiased">
                        Jogo da Lebra e da Tartaruga
                    </h4>
                    <p class="mb-8 block text-base font-normal leading-relaxed text-[#ffffff] antialiased">
                        Um jogo na consola do Windows que se baseia no jogo de tabuleira da Lebre e da Tartaruga, desenvolvido em C.
                    </p>
                    <a class="inline-block" href="https://github.com/GoPokas/Laboratorio" target="_blank">
                        <button class="animate-pulse flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle text-sm font-black uppercase text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF] transition-all disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                            Visitar Projeto
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex mb-20">
        <div class="mx-auto">
            <h1 class="max-w-screen-md text-center text-[55px] font-extrabold text-white">
                <span id="projects" class="text-transparent bg-clip-text bg-gradient-to-tr from-[#FF8660] to-[#8000FF]">Conhecimentos</span><br />
            </h1>
        </div>
    </div>
</body>
</html>