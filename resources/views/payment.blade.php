<?php

?>
@extends('layout.base')
@section('header')
@endsection

<link rel="stylesheet" href="{{ asset('css/font/stylesheet.css')}}">
<link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
    </head>
    <body>

    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    
<div class="header">
    <div class="header__body">
        <div class="header__body-content">
            <div class="header__body-left">
                <div class="header__body-img">
                    <svg
                        width="253"
                        height="58"
                        viewBox="0 0 253 58"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="jss137"
                    >
                        <path
                            d="M178.354 35.394l8.547-11.397v17.237h1.424V21.29h-1.139l-8.832 11.682-8.833-11.681h-1.139v19.943h1.424V23.997l8.548 11.397zM192.739 34.396c0 3.99 3.134 7.123 6.838 7.123s6.838-3.134 6.838-7.123c0-3.988-3.134-7.122-6.838-7.122s-6.838 3.134-6.838 7.122zm12.394 0c0 3.277-2.564 5.841-5.556 5.841-2.991 0-5.556-2.564-5.556-5.84 0-3.277 2.565-5.841 5.556-5.841 2.992 0 5.556 2.564 5.556 5.84zM211.688 27.558h-1.282v13.676h1.282v-7.692c0-2.85 2.137-4.986 4.701-4.986 2.422 0 4.274 1.852 4.274 4.558v8.12h1.282v-8.12c0-3.419-2.422-5.84-5.556-5.84-3.419 0-4.701 2.706-4.701 2.706v-2.422zM238.475 34.966v-.57c0-4.273-2.849-7.122-6.268-7.122-3.419 0-6.553 3.134-6.553 7.122 0 3.99 3.134 7.123 6.696 7.123 3.561 0 5.413-2.849 5.413-2.849l-.855-.826s-1.567 2.393-4.558 2.393c-2.85 0-5.271-2.422-5.414-5.27h11.539zm-6.268-6.41c2.707 0 4.844 2.137 4.986 5.128h-10.257c.143-2.706 2.564-5.128 5.271-5.128zM245.022 43.798c-.569 1.425-1.282 2.137-2.564 2.137-.712 0-1.282-.285-1.282-.285v1.282s.57.285 1.282.285c1.995 0 3.02-.997 3.989-3.419L253 27.558h-1.425l-4.843 11.967-4.844-11.966h-1.424l5.556 13.675-.998 2.564z"
                            fill="#000"
                        ></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M150.005 57.19V.206h.855V57.19h-.855z"
                            fill="#D1D1D1"
                        ></path>
                        <path
                            d="M68.331 40.855L59.496 28.21l8.476-12.01h-6.536l-7.687 10.707V16.199h-5.746v24.656h5.746V29.443l8.046 11.412h6.536zM82.213 23.244v9.615c0 2.501-1.365 3.628-3.34 3.628-1.724 0-3.125-1.021-3.125-3.205V23.244h-5.387v10.813c0 4.755 3.089 7.291 6.716 7.291 2.37 0 4.166-.845 5.136-2.148v1.655h5.388V23.244h-5.388zM103.083 22.75c-2.37 0-4.166.846-5.136 2.15v-1.656H92.56v17.611h5.387v-9.616c0-2.5 1.365-3.628 3.34-3.628 1.724 0 3.125 1.022 3.125 3.206v10.038h5.387V30.042c0-4.755-3.089-7.291-6.716-7.291zM127.544 23.244v1.655c-1.185-1.338-2.945-2.148-5.351-2.148-4.705 0-8.584 4.05-8.584 9.298 0 5.249 3.879 9.3 8.584 9.3 2.406 0 4.166-.811 5.351-2.15v1.656h5.388V23.244h-5.388zm-4.274 13.102c-2.478 0-4.274-1.655-4.274-4.297 0-2.641 1.796-4.297 4.274-4.297 2.478 0 4.274 1.656 4.274 4.297 0 2.642-1.796 4.297-4.274 4.297z"
                            fill="#000"
                        ></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M4.69 50.066h21.949c4.238 0 6.724-4.66 4.299-8.057L21.793 29.2a2.532 2.532 0 01-.202-2.616c-2.35 3.263-4.697 6.536-7.048 9.799-3.28 4.554-6.57 9.128-9.853 13.683z"
                            fill="#312A7D"
                        ></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M0 44.957c0 2.78 1.799 4.878 4.69 5.11 8.525-11.84 17.035-23.677 25.561-35.505 2.45-3.399-.036-8.087-4.289-8.087H5.247C2.35 6.475 0 8.772 0 11.606v33.35z"
                            fill="url(#logo_svg__paint0_linear)"
                        ></path>
                        <defs>
                            <linearGradient
                                id="logo_svg__paint0_linear"
                                x1="2.337"
                                y1="8.127"
                                x2="33.599"
                                y2="55.019"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#47D3FF"></stop>
                                <stop offset="1" stop-color="#2195EA"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="left__content-text">
                    Продукты
                </div>
            </div>

            <div class="header__body-rigt">
                <button>
                    <span class="header__body-language">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="jss140"
                        >
                            <path
                                d="M8 16A8 8 0 108 0a8 8 0 000 16z"
                                fill="#F0F0F0"
                            ></path>
                            <path
                                d="M15.502 10.783A7.982 7.982 0 0016 8c0-.979-.176-1.916-.498-2.783H.498A7.983 7.983 0 000 8c0 .979.176 1.916.498 2.783L8 11.478l7.502-.695z"
                                fill="#0052B4"
                            ></path>
                            <path
                                d="M8 16a8.003 8.003 0 007.503-5.217H.498A8.003 8.003 0 008 16z"
                                fill="#D80027"
                            ></path>
                        </svg>
                    </span>
                    <sapn class="header__language-text"> RU </sapn>
                </button>

                <div class="line"></div>

                <div class="header__body-price">
                    <div class="body__prcie-text">
                        <div class="body__prcie-img">
                            <svg
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="jss177"
                            >
                                <path
                                    d="M16 32c15.877 0 16-7.163 16-16S31.877 0 16 0 0 7.163 0 16s.123 16 16 16z"
                                    fill="#F7931A"
                                ></path>
                                <path
                                    d="M21.486 18.196c-.263-.622-.772-1.137-1.53-1.546 1.17-.246 1.86-1.01 2.07-2.293.08-.464.06-.89-.062-1.28a2.452 2.452 0 00-.64-1.032 4.893 4.893 0 00-1.047-.778 9.628 9.628 0 00-1.39-.62l.696-2.595-1.596-.427-.676 2.522c-.276-.074-.7-.18-1.27-.318l.682-2.543-1.596-.428-.696 2.595c-.23-.054-.565-.14-1.008-.259l-2.194-.6-.452 1.69 1.15.308c.525.14.77.456.735.947l-.792 2.956c.069.018.123.036.163.054l-.166-.044-1.11 4.14c-.148.334-.395.456-.74.363L8.865 18.7l-.826 1.798 2.073.556.568.157c.248.07.434.122.558.155l-.703 2.626 1.596.428.695-2.595c.289.085.71.201 1.262.35l-.693 2.584 1.596.427.704-2.625c.574.124 1.09.207 1.55.25.458.041.91.035 1.354-.019a3.52 3.52 0 001.166-.333c.334-.168.639-.414.914-.737.276-.324.503-.723.682-1.197.346-.93.387-1.706.124-2.329zm-5.91-6.505l.41.104.563.14c.15.036.348.098.594.187.247.088.452.172.616.253.163.08.338.188.524.322.186.135.326.275.42.422.094.146.161.319.2.517.04.198.03.41-.031.637-.052.192-.13.36-.234.5a1.025 1.025 0 01-.386.322 2.937 2.937 0 01-.458.175 1.826 1.826 0 01-.554.056 10.781 10.781 0 01-.564-.03 4.553 4.553 0 01-.585-.096c-.23-.05-.406-.09-.524-.118-.118-.028-.279-.071-.482-.13a45.007 45.007 0 00-.356-.1l.847-3.161zm2.48 8.18c-.109.14-.23.255-.365.344-.135.088-.3.155-.492.199a3.655 3.655 0 01-.55.084 4.127 4.127 0 01-.614-.01 7.823 7.823 0 01-1.232-.192 14.22 14.22 0 01-1.05-.27l-.382-.108.933-3.48c.055.014.22.055.495.121s.498.123.671.17c.173.045.409.12.707.222.299.101.546.2.742.297.197.097.406.221.628.373.222.151.393.31.512.474a1.6 1.6 0 01.256.576c.053.22.046.454-.02.7a1.402 1.402 0 01-.24.5z"
                                    fill="#fff"
                                ></path>
                            </svg>
                        </div>
                        <div class="price__BTC"> </div> <span>RUB</span>
                    </div>
                    <div class="body__prcie-text">
                        <div class="body__prcie-img">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="jss177"
                            >
                                <path
                                    d="M12 24c11.907 0 12-5.372 12-12S23.907 0 12 0C.092 0 0 5.372 0 12s.092 12 12 12z"
                                    fill="#2468E4"
                                ></path>
                                <path
                                    d="M11.785 18.381l-3.13-5.09c-.142-.23.152-.477.37-.313l2.821 2.117a.26.26 0 00.31 0l2.82-2.117c.219-.164.513.083.371.313l-3.13 5.09a.257.257 0 01-.432 0z"
                                    fill="#fff"
                                ></path>
                                <path
                                    d="M8.529 11.068l3.246-5.939a.256.256 0 01.447.003l3.25 6.147c.06.11.02.246-.089.313l-3.24 1.976a.26.26 0 01-.28-.005l-3.256-2.185a.236.236 0 01-.078-.31z"
                                    fill="#fff"
                                ></path>
                            </svg>
                        </div>
                        <div class="price__ETH"></div><span>RUB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="title__down">
                                <h1>Быстрая покупка и продажа криптоактивов</h1>
                                <div class="title__down-text"> Покупка и продажа криптовалюты с помощью карты Visa/Mastercard UAH </div>
                            </div>


        <div class="content">
            <div class="main__content">

            <div class="main__content-income">
                <h1 class="main__contnet-header">Отдаете</h1>
                <div class="header-down">
                    Выберете способ, которым вы хотите <br> оплатить покупку
                </div>
                <!-- <form action="{{asset ('js/request.js')}}" method="POST"> -->
                <form action="{{asset ('js/request.js')}}" method="post" id="form">

                <!-- @csrf -->
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <!-- <form action="{{asset ('controllers/MAinController.php')}}" method="POST"> -->


                <div class="content__icon-income actived" id="UAH" name="Visa_UAH" value="">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="_1--ndQvNEaSQU5-DTIdOS"><path fill="#fff" d="M0 0h38v38H0z"></path><path d="M22.518 33.007h-6.02V21.841h6.02v11.166z" fill="#FF5F00"></path><path d="M16.883 27.423a7.173 7.173 0 012.628-5.583 6.72 6.72 0 00-4.253-1.518c-3.8 0-6.88 3.18-6.88 7.101 0 3.922 3.08 7.102 6.88 7.102a6.72 6.72 0 004.253-1.519 7.173 7.173 0 01-2.628-5.583z" fill="#EB001B"></path><path d="M30.639 27.423c0 3.922-3.08 7.102-6.881 7.102a6.722 6.722 0 01-4.253-1.519 7.172 7.172 0 002.628-5.583 7.172 7.172 0 00-2.628-5.583 6.722 6.722 0 014.253-1.518c3.8 0 6.88 3.18 6.88 7.101z" fill="#F79E1B"></path><path d="M22.427 5.736c-.674.109-.955.434-.955.705-.023.402.495.666 1.114.98.886.452 1.978 1.008 1.978 2.221 0 1.737-1.518 2.822-3.823 2.822-1.012 0-1.968-.217-2.474-.434l.394-1.79c.506.27 1.124.542 2.249.542.674 0 1.349-.271 1.349-.814 0-.38-.281-.651-1.125-1.03-.787-.38-1.911-1.032-1.911-2.225 0-1.574 1.518-2.713 3.71-2.713.844 0 1.575.217 2.08.38l-.393 1.736c-1.012-.434-1.855-.434-2.193-.38zM10.791 9.751l2.304-5.588v-.054H15.4l-3.598 8.246h-2.36L7.697 5.79c-.112-.38-.168-.542-.505-.705C6.63 4.814 5.787 4.543 5 4.38l.056-.217h3.767c.45 0 .9.271 1.012.814l.955 4.774zm3.71 2.658l1.855-8.246h2.193l-1.8 8.246h-2.248zM30.58 4.163h-1.911c-.45 0-.787.217-.956.596l-3.317 7.65H26.7l.45-1.248h2.811l.281 1.248h2.024l-1.687-8.246zM27.881 9.48l1.18-3.093.675 3.093h-1.855z" fill="#00579F"></path></svg>
                    <div class="content__icon-text">Visa/Mastercard (UAH)</div>
                </div>

                <div class="content__icon-income" id="BTC" name="BTC" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#F7931A"></path><path d="M32.23 27.295c-.395-.934-1.16-1.707-2.295-2.32 1.754-.369 2.789-1.515 3.104-3.44.12-.696.089-1.336-.093-1.92a3.678 3.678 0 00-.96-1.548 7.338 7.338 0 00-1.571-1.166 14.43 14.43 0 00-2.083-.93l1.043-3.893-2.394-.641-1.014 3.784a89.99 89.99 0 00-1.905-.477l1.022-3.815-2.394-.642-1.043 3.892c-.345-.08-.849-.21-1.512-.388l-3.291-.899-.68 2.533 1.726.463c.788.21 1.155.685 1.102 1.42l-1.187 4.434c.104.028.185.055.244.082l-.248-.067-1.664 6.21c-.224.502-.595.684-1.113.545L13.3 28.05l-1.24 2.698 3.11.833c.197.053.48.131.853.236.371.105.65.183.837.233l-1.055 3.938 2.394.642 1.043-3.892a88.41 88.41 0 001.892.523l-1.038 3.877 2.393.642 1.056-3.939c.86.187 1.635.312 2.324.374a9.577 9.577 0 002.031-.027c.666-.08 1.25-.247 1.75-.5.5-.251.958-.62 1.371-1.105.413-.486.754-1.084 1.023-1.796.518-1.395.58-2.559.186-3.492zm-8.866-9.759a119.104 119.104 0 001.46.366c.224.055.521.148.891.28.37.133.678.26.923.38s.508.282.786.484c.28.202.49.413.63.632.142.22.242.479.3.776.06.297.044.616-.047.956a2.211 2.211 0 01-.35.75c-.157.212-.35.373-.58.482a4.41 4.41 0 01-.687.263 2.738 2.738 0 01-.83.084c-.325-.01-.607-.025-.846-.045a6.811 6.811 0 01-.878-.144 55.426 55.426 0 01-.785-.177 17.534 17.534 0 01-.723-.194 66.71 66.71 0 00-.535-.151l1.27-4.742zm3.719 12.27c-.163.21-.345.383-.547.516a2.234 2.234 0 01-.738.299c-.29.066-.565.108-.825.126-.261.019-.568.014-.921-.015-.354-.028-.66-.064-.922-.106-.26-.042-.569-.103-.926-.182a21.317 21.317 0 01-1.574-.405c-.3-.086-.49-.14-.573-.162l1.399-5.22c.083.021.33.082.742.182.413.099.748.184 1.007.253.26.07.613.18 1.06.334a9.54 9.54 0 011.114.447c.294.145.608.33.941.558.334.228.59.464.768.711.179.247.307.535.385.865.079.33.068.68-.031 1.05a2.101 2.101 0 01-.36.749z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Bitcoin (BTC)</div>
                </div>

                <div class="content__icon-income" id="ETH" name="ETH" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#2468E4"></path><path d="M23.57 36.763l-6.26-10.181c-.283-.46.304-.954.742-.626l5.64 4.234a.519.519 0 00.62 0l5.64-4.234c.438-.328 1.025.167.743.626l-6.26 10.18a.514.514 0 01-.866 0z" fill="#fff"></path><path d="M17.058 22.136l6.492-11.878a.512.512 0 01.893.006l6.502 12.294a.472.472 0 01-.178.626l-6.482 3.953a.52.52 0 01-.558-.012l-6.512-4.369a.471.471 0 01-.157-.62z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Etherium (ETH)</div>
                </div>

                <div class="content__icon-income" id="RUB" name="QIWI_RUB" value="">
                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.215 24.653c.66.246.915 1.203.965 1.62.102.763-.126 1.057-.38 1.057s-.61-.294-.99-.884c-.382-.59-.534-1.253-.33-1.597.126-.221.405-.319.736-.196h-.001zm-3.86 2.776c.407 0 .864.172 1.27.515.787.64 1.016 1.376.61 1.916-.229.27-.61.443-1.041.443-.432 0-.889-.148-1.193-.418-.711-.59-.914-1.573-.458-2.113.178-.221.458-.343.813-.343zm-8.886 7.099C7.82 34.528 0 26.962 0 17.628 0 8.293 7.82.728 17.469.728c9.648 0 17.47 7.566 17.47 16.9 0 3.168-.915 6.14-2.463 8.671-.051.073-.178.049-.204-.05-.609-4.15-3.224-6.436-7.033-7.123-.33-.05-.381-.246.05-.295 1.169-.098 2.819-.073 3.682.074.05-.418.077-.86.077-1.302 0-6.166-5.18-11.177-11.554-11.177-6.373 0-11.553 5.011-11.553 11.177 0 6.166 5.18 11.177 11.554 11.177h.532a14.594 14.594 0 01-.228-3.022c.026-.687.178-.786.483-.245 1.6 2.677 3.885 5.084 8.353 6.042 3.656.787 7.313 1.695 11.248 6.534.356.418-.177.86-.584.516-4.01-3.44-7.667-4.57-10.994-4.57-3.733.026-6.271.493-8.836.493z" fill="#FF8C00"></path></svg>
                    <div class="content__icon-text">Qiwi (RUB)</div>
                </div>

                <div class="content__icon-income" id="Waves" name="Waves" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#002FFF"></path><path d="M23.293 13.707a1 1 0 011.414 0l9.586 9.586a1 1 0 010 1.414l-9.586 9.586a1 1 0 01-1.414 0l-9.586-9.586a1 1 0 010-1.414l9.586-9.586z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Waves (Waves)</div>
                </div>

                <div class="content__icon-income" id="ZEC" name="ZEC" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#F6C350"></path><path d="M32 13.793h-5.956V10h-4.476v3.793H16v4.759h9.445L16 29.379v4.828h5.568V38h4.476v-3.793H32v-4.828h-9.163L32 18.69v-4.897z" fill="#000"></path></svg>
                    <div class="content__icon-text">Zcash (ZEC)</div>
                </div>
            </div>
                <div class="vertical__line">
                </div>
            <div class="main__content-outcome">
                <h1 class="main__contnet-header">Получаете</h1>
                <div class="header-down">
                    Выберете актив, который хотите купить
                </div>

                <div class="content__iocon-outcome" name="Visa_UAH" id="UAH1"  value="">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="_1--ndQvNEaSQU5-DTIdOS"><path fill="#fff" d="M0 0h38v38H0z"></path><path d="M22.518 33.007h-6.02V21.841h6.02v11.166z" fill="#FF5F00"></path><path d="M16.883 27.423a7.173 7.173 0 012.628-5.583 6.72 6.72 0 00-4.253-1.518c-3.8 0-6.88 3.18-6.88 7.101 0 3.922 3.08 7.102 6.88 7.102a6.72 6.72 0 004.253-1.519 7.173 7.173 0 01-2.628-5.583z" fill="#EB001B"></path><path d="M30.639 27.423c0 3.922-3.08 7.102-6.881 7.102a6.722 6.722 0 01-4.253-1.519 7.172 7.172 0 002.628-5.583 7.172 7.172 0 00-2.628-5.583 6.722 6.722 0 014.253-1.518c3.8 0 6.88 3.18 6.88 7.101z" fill="#F79E1B"></path><path d="M22.427 5.736c-.674.109-.955.434-.955.705-.023.402.495.666 1.114.98.886.452 1.978 1.008 1.978 2.221 0 1.737-1.518 2.822-3.823 2.822-1.012 0-1.968-.217-2.474-.434l.394-1.79c.506.27 1.124.542 2.249.542.674 0 1.349-.271 1.349-.814 0-.38-.281-.651-1.125-1.03-.787-.38-1.911-1.032-1.911-2.225 0-1.574 1.518-2.713 3.71-2.713.844 0 1.575.217 2.08.38l-.393 1.736c-1.012-.434-1.855-.434-2.193-.38zM10.791 9.751l2.304-5.588v-.054H15.4l-3.598 8.246h-2.36L7.697 5.79c-.112-.38-.168-.542-.505-.705C6.63 4.814 5.787 4.543 5 4.38l.056-.217h3.767c.45 0 .9.271 1.012.814l.955 4.774zm3.71 2.658l1.855-8.246h2.193l-1.8 8.246h-2.248zM30.58 4.163h-1.911c-.45 0-.787.217-.956.596l-3.317 7.65H26.7l.45-1.248h2.811l.281 1.248h2.024l-1.687-8.246zM27.881 9.48l1.18-3.093.675 3.093h-1.855z" fill="#00579F"></path></svg>

                    <div class="content__icon-text">Visa/Mastercard (UAH)</div>
                </div>

                <div class="content__iocon-outcome active actived" id="BTC1" name="BTC" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#F7931A"></path><path d="M32.23 27.295c-.395-.934-1.16-1.707-2.295-2.32 1.754-.369 2.789-1.515 3.104-3.44.12-.696.089-1.336-.093-1.92a3.678 3.678 0 00-.96-1.548 7.338 7.338 0 00-1.571-1.166 14.43 14.43 0 00-2.083-.93l1.043-3.893-2.394-.641-1.014 3.784a89.99 89.99 0 00-1.905-.477l1.022-3.815-2.394-.642-1.043 3.892c-.345-.08-.849-.21-1.512-.388l-3.291-.899-.68 2.533 1.726.463c.788.21 1.155.685 1.102 1.42l-1.187 4.434c.104.028.185.055.244.082l-.248-.067-1.664 6.21c-.224.502-.595.684-1.113.545L13.3 28.05l-1.24 2.698 3.11.833c.197.053.48.131.853.236.371.105.65.183.837.233l-1.055 3.938 2.394.642 1.043-3.892a88.41 88.41 0 001.892.523l-1.038 3.877 2.393.642 1.056-3.939c.86.187 1.635.312 2.324.374a9.577 9.577 0 002.031-.027c.666-.08 1.25-.247 1.75-.5.5-.251.958-.62 1.371-1.105.413-.486.754-1.084 1.023-1.796.518-1.395.58-2.559.186-3.492zm-8.866-9.759a119.104 119.104 0 001.46.366c.224.055.521.148.891.28.37.133.678.26.923.38s.508.282.786.484c.28.202.49.413.63.632.142.22.242.479.3.776.06.297.044.616-.047.956a2.211 2.211 0 01-.35.75c-.157.212-.35.373-.58.482a4.41 4.41 0 01-.687.263 2.738 2.738 0 01-.83.084c-.325-.01-.607-.025-.846-.045a6.811 6.811 0 01-.878-.144 55.426 55.426 0 01-.785-.177 17.534 17.534 0 01-.723-.194 66.71 66.71 0 00-.535-.151l1.27-4.742zm3.719 12.27c-.163.21-.345.383-.547.516a2.234 2.234 0 01-.738.299c-.29.066-.565.108-.825.126-.261.019-.568.014-.921-.015-.354-.028-.66-.064-.922-.106-.26-.042-.569-.103-.926-.182a21.317 21.317 0 01-1.574-.405c-.3-.086-.49-.14-.573-.162l1.399-5.22c.083.021.33.082.742.182.413.099.748.184 1.007.253.26.07.613.18 1.06.334a9.54 9.54 0 011.114.447c.294.145.608.33.941.558.334.228.59.464.768.711.179.247.307.535.385.865.079.33.068.68-.031 1.05a2.101 2.101 0 01-.36.749z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Bitcoin (BTC)</div>
                </div>

                <div class="content__iocon-outcome active" id="ETH1" name="ETH" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#2468E4"></path><path d="M23.57 36.763l-6.26-10.181c-.283-.46.304-.954.742-.626l5.64 4.234a.519.519 0 00.62 0l5.64-4.234c.438-.328 1.025.167.743.626l-6.26 10.18a.514.514 0 01-.866 0z" fill="#fff"></path><path d="M17.058 22.136l6.492-11.878a.512.512 0 01.893.006l6.502 12.294a.472.472 0 01-.178.626l-6.482 3.953a.52.52 0 01-.558-.012l-6.512-4.369a.471.471 0 01-.157-.62z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Etherium (ETH)</div>
                </div>

                <div class="content__iocon-outcome" id="TRC1" name="TRC" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#4FAA4D"></path><path d="M26.723 19.616v-3.372h7.797V11H13.219v5.244h7.796v3.385C14.718 19.957 10 21.3 10 22.909c0 1.607 4.718 2.95 11.015 3.279v10.506c.964.201 1.962.306 2.985.306.93 0 1.84-.087 2.723-.254V26.201C33.151 25.897 38 24.538 38 22.908c0-1.63-4.849-2.988-11.277-3.292zM24 24.98c-7.025 0-12.72-1.078-12.72-2.407 0-1.135 4.15-2.087 9.735-2.34v3.854a19.647 19.647 0 005.708 0v-3.866c5.716.236 9.996 1.199 9.996 2.352 0 1.33-5.695 2.407-12.719 2.407z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Teher (TRC20)</div>
                </div>

                <div class="content__iocon-outcome" id="RUB1" name="QIWI_RUB" value="">
                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.215 24.653c.66.246.915 1.203.965 1.62.102.763-.126 1.057-.38 1.057s-.61-.294-.99-.884c-.382-.59-.534-1.253-.33-1.597.126-.221.405-.319.736-.196h-.001zm-3.86 2.776c.407 0 .864.172 1.27.515.787.64 1.016 1.376.61 1.916-.229.27-.61.443-1.041.443-.432 0-.889-.148-1.193-.418-.711-.59-.914-1.573-.458-2.113.178-.221.458-.343.813-.343zm-8.886 7.099C7.82 34.528 0 26.962 0 17.628 0 8.293 7.82.728 17.469.728c9.648 0 17.47 7.566 17.47 16.9 0 3.168-.915 6.14-2.463 8.671-.051.073-.178.049-.204-.05-.609-4.15-3.224-6.436-7.033-7.123-.33-.05-.381-.246.05-.295 1.169-.098 2.819-.073 3.682.074.05-.418.077-.86.077-1.302 0-6.166-5.18-11.177-11.554-11.177-6.373 0-11.553 5.011-11.553 11.177 0 6.166 5.18 11.177 11.554 11.177h.532a14.594 14.594 0 01-.228-3.022c.026-.687.178-.786.483-.245 1.6 2.677 3.885 5.084 8.353 6.042 3.656.787 7.313 1.695 11.248 6.534.356.418-.177.86-.584.516-4.01-3.44-7.667-4.57-10.994-4.57-3.733.026-6.271.493-8.836.493z" fill="#FF8C00"></path></svg>
                    <div class="content__icon-text">Qiwi (RUB)</div>
                </div>
                <div class="content__iocon-outcome" id="VisaRUB" name="VisaRUB" value="">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="_1--ndQvNEaSQU5-DTIdOS"><path fill="#fff" d="M0 0h38v38H0z"></path><path d="M22.518 33.007h-6.02V21.841h6.02v11.166z" fill="#FF5F00"></path><path d="M16.883 27.423a7.173 7.173 0 012.628-5.583 6.72 6.72 0 00-4.253-1.518c-3.8 0-6.88 3.18-6.88 7.101 0 3.922 3.08 7.102 6.88 7.102a6.72 6.72 0 004.253-1.519 7.173 7.173 0 01-2.628-5.583z" fill="#EB001B"></path><path d="M30.639 27.423c0 3.922-3.08 7.102-6.881 7.102a6.722 6.722 0 01-4.253-1.519 7.172 7.172 0 002.628-5.583 7.172 7.172 0 00-2.628-5.583 6.722 6.722 0 014.253-1.518c3.8 0 6.88 3.18 6.88 7.101z" fill="#F79E1B"></path><path d="M22.427 5.736c-.674.109-.955.434-.955.705-.023.402.495.666 1.114.98.886.452 1.978 1.008 1.978 2.221 0 1.737-1.518 2.822-3.823 2.822-1.012 0-1.968-.217-2.474-.434l.394-1.79c.506.27 1.124.542 2.249.542.674 0 1.349-.271 1.349-.814 0-.38-.281-.651-1.125-1.03-.787-.38-1.911-1.032-1.911-2.225 0-1.574 1.518-2.713 3.71-2.713.844 0 1.575.217 2.08.38l-.393 1.736c-1.012-.434-1.855-.434-2.193-.38zM10.791 9.751l2.304-5.588v-.054H15.4l-3.598 8.246h-2.36L7.697 5.79c-.112-.38-.168-.542-.505-.705C6.63 4.814 5.787 4.543 5 4.38l.056-.217h3.767c.45 0 .9.271 1.012.814l.955 4.774zm3.71 2.658l1.855-8.246h2.193l-1.8 8.246h-2.248zM30.58 4.163h-1.911c-.45 0-.787.217-.956.596l-3.317 7.65H26.7l.45-1.248h2.811l.281 1.248h2.024l-1.687-8.246zM27.881 9.48l1.18-3.093.675 3.093h-1.855z" fill="#00579F"></path></svg>
                    <div class="content__icon-text">Visa/Mastercard (RUB)</div>
                </div>

                <div class="content__iocon-outcome active" id="Waves1" name="Waves"  value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#002FFF"></path><path d="M23.293 13.707a1 1 0 011.414 0l9.586 9.586a1 1 0 010 1.414l-9.586 9.586a1 1 0 01-1.414 0l-9.586-9.586a1 1 0 010-1.414l9.586-9.586z" fill="#fff"></path></svg>
                    <div class="content__icon-text">Waves (Waves)</div>
                </div>

                <div class="content__iocon-outcome" id="ZEC1" name="ZEC" value="">
                <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="_3t1AkS5i9JHQ6cpAM4JDaq"><path d="M24 48c23.815 0 24-10.745 24-24S47.815 0 24 0 0 10.745 0 24s.185 24 24 24z" fill="#F6C350"></path><path d="M32 13.793h-5.956V10h-4.476v3.793H16v4.759h9.445L16 29.379v4.828h5.568V38h4.476v-3.793H32v-4.828h-9.163L32 18.69v-4.897z" fill="#000"></path></svg>
                    <div class="content__icon-text">Zcash (ZEC)</div>
                </div>

            </div>
                        <div class="vertical__line">
            </div>

            <div class="main__content-transithion">
                <h1 class="main__contnet-header">Детали транзакции</h1>
                <div class="header__down">
                    <!-- РЕзультат запроса, который будет нажат(какой выбрали ввод средств) -->
                    Покупка Bitcoin (BTC) через Visa/Mastercard (UAH)
                                    </div>

                    <div class="main__content-about">
                        <div class="content__about-title">Вы отдадите</div>
                        <div class="content__about-in">
                            <input type="text" class="cashin" placeholder="0" value="" name="income__sum" id="income__sum" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" onkeyup="this.value=this.value.replace(/\s+/gi,'')"><div class="content__about-right" id="income">UAH</div> <!--ТО значение, которое выберет пользователь!!! -->
                        </div>
                    </div>

                    <div class="main__content-about">

                        <div class="content__about-title">Вы получите</div>
                        <div class="content__about-in">
                            <input type="text" class="cashin" placeholder="0" value=""  name="outcome__sum" id="outcome__sum" readonly><span class="content__about-right" onkeyup="this.value=this.value.replace(/\s+/gi,'')" id="outcome" value="">BTC</span> <!--ТО значение, которое выберет пользователь!!! -->

                        </div>
                    </div>
                                        <div class="main__content-aboutadress activee" id="adres">

                    <div class="content__about-title" id="adres__title">Адрес BTC кошелька.</div>
                    <div class="content__about-in">
                        <input type="text" class="cashin" placeholder="Введите адрес" name="requisites_purse" onkeyup="this.value=this.value.replace(/\s+/gi,'')"><span class="content__about-right"></span> <!--ТО значение, которое выберет пользователь!!! -->
         
                    </div>
                    </div>

                    <div class="main__content-aboutcard" id="card">

                <div class="content__about-title active">Номер карты</div>
                <div class="content__about-in">
                    <input type="text" class="cashin" placeholder="Номер карты"  name="requisites_card" onkeyup="this.value=this.value.replace(/\s+/gi,'')"><span class="content__about-right"></span> <!--ТО значение, которое выберет пользователь!!! -->

                </div>
                </div>

                    <div class="main__content-aboutqiwi" id="qiwi">

                    <div class="content__about-title">Кошелёк Qiwi</div>
                    <div class="content__about-in">
                        <input type="text" class="cashin" placeholder="+"  name="requisites_qiwi" id="qiwiR" onkeyup="this.value=this.value.replace(/\s+/gi,'')"><span class="content__about-right"></span> <!--ТО значение, которое выберет пользователь!!! -->
                    </div>
                    </div>


              

                    <div class="main__content-about-qiwi">
                        <div class="content__about-title">Email</div>
                        <div class="content__about-in">
                            <input type="text" class="cashin" placeholder="Введите email"  name="email" onkeyup="this.value=this.value.replace(/\s+/gi,'')"><span class="content__about-right"></span> <!--ТО значение, которое выберет пользователь!!! -->

                        </div>
                    </div>
                    <div class="content__about-down">
                        <input type="checkbox" class="check__agree" name="agree">
                    <p class="about__down">
                        Я соглашаюсь с условиями <a class="about__down-blue">пользовательского <br>  соглашения Kuna Exchange
                        </a>
                    </p>
                    </div>

                    <div class="content__buy">
                        <span id="buy" type="submit"> Купить BTC</span>
                    </div>
            </form>

    </div>
            </div>
        </div>

        <div class="last__content">
      <div class="last__content-body">
        <h1>Залишилися запитання?</h1>
        <p> 
          Відповідаємо протягом 30 секунд! Ми спілкуємося в зручних для вас
          месенджерах.<br> Ніяких автовідповідачів і роботів. Спілкування лише з
          живими людьми. 😊 😊
        </p>

        <div class="telegram">
          <img src="" />   <!--telegram.svg-->
          <div class="telega__link">TELEGA</div>
        </div>
      </div>
    </div>
        <script src="{{('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{('js/mask.js')}}"></script>
    <script src="{{asset ('js/request.js')}}"></script>
  

    </body>
</html>
