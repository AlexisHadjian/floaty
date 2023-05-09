<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL ?>/public/assets/img/admin.png">
    <link href="<?= SITE_URL ?>/public/styles/admin.css" type="text/css" rel="stylesheet">
    <script defer src="<?= SITE_URL ?>/public/script.js" type="text/javascript"></script>
    <title>Back-office</title>
</head>
<body>

    <main id="main" class="back">

        <div class="admin-container">
            <nav>
                <div class="top">
                    <a class="logo" href="<?= SITE_URL ?>">
                        <img src="<?= SITE_URL ?>/public/assets/img/logo-white.png">
                    </a>
                    <ul>
                        <li>
                            <a href="<?= SITE_URL ?>/admin/dashboard">
                                <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.63669 19H21.3633C22.7776 17.2812 23.6646 15.2082 23.922 13.0199C24.1794 10.8315 23.7968 8.6168 22.8181 6.63102C21.8395 4.64525 20.3048 2.96919 18.3908 1.796C16.4768 0.622812 14.2615 0.000229479 12 0C9.73855 0.000229479 7.52317 0.622812 5.60918 1.796C3.69518 2.96919 2.16045 4.64525 1.18185 6.63102C0.20325 8.6168 -0.1794 10.8315 0.0779967 13.0199C0.335393 15.2082 1.22236 17.2812 2.63669 19ZM12 1.46154C12.8253 1.46154 13.5005 2.11923 13.5005 2.92308C13.5005 3.72692 12.8253 4.38462 12 4.38462C11.1747 4.38462 10.4995 3.72692 10.4995 2.92308C10.4995 2.11923 11.1747 1.46154 12 1.46154ZM5.99788 4.38462C6.82317 4.38462 7.49841 5.04231 7.49841 5.84615C7.49841 6.65 6.82317 7.30769 5.99788 7.30769C5.17259 7.30769 4.49735 6.65 4.49735 5.84615C4.49735 5.04231 5.17259 4.38462 5.99788 4.38462ZM18.0021 4.38462C18.8274 4.38462 19.5027 5.04231 19.5027 5.84615C19.5027 6.65 18.8274 7.30769 18.0021 7.30769C17.1768 7.30769 16.5016 6.65 16.5016 5.84615C16.5016 5.04231 17.1768 4.38462 18.0021 4.38462ZM9.94427 12.4962L15.0011 5.84615V14.6154C15.0011 16.2231 13.6506 17.5385 12 17.5385C10.3494 17.5385 8.99894 16.2231 8.99894 14.6154C8.99894 13.7823 9.35907 13.0369 9.94427 12.4962ZM2.99682 10.2308C3.82211 10.2308 4.49735 10.8885 4.49735 11.6923C4.49735 12.4962 3.82211 13.1538 2.99682 13.1538C2.17152 13.1538 1.49629 12.4962 1.49629 11.6923C1.49629 10.8885 2.17152 10.2308 2.99682 10.2308ZM21.0032 10.2308C21.8285 10.2308 22.5037 10.8885 22.5037 11.6923C22.5037 12.4962 21.8285 13.1538 21.0032 13.1538C20.1779 13.1538 19.5027 12.4962 19.5027 11.6923C19.5027 10.8885 20.1779 10.2308 21.0032 10.2308ZM13.5005 14.6154C13.5005 13.8115 12.8253 13.1538 12 13.1538C11.1747 13.1538 10.4995 13.8115 10.4995 14.6154C10.4995 15.4192 11.1747 16.0769 12 16.0769C12.8253 16.0769 13.5005 15.4192 13.5005 14.6154Z" fill="#F8F8F8"/>
                                </svg>

                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= SITE_URL ?>/admin/blog">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.55556 15.5556H11.1111C11.4259 15.5556 11.69 15.4489 11.9033 15.2356C12.1167 15.0222 12.223 14.7585 12.2222 14.4444C12.2222 14.1296 12.1156 13.8656 11.9022 13.6522C11.6889 13.4389 11.4252 13.3326 11.1111 13.3333H5.55556C5.24074 13.3333 4.97667 13.44 4.76333 13.6533C4.55 13.8667 4.44371 14.1304 4.44445 14.4444C4.44445 14.7593 4.55111 15.0233 4.76445 15.2367C4.97778 15.45 5.24148 15.5563 5.55556 15.5556ZM5.55556 11.1111H14.4444C14.7593 11.1111 15.0233 11.0044 15.2367 10.7911C15.45 10.5778 15.5563 10.3141 15.5556 10C15.5556 9.68519 15.4489 9.42111 15.2356 9.20778C15.0222 8.99444 14.7585 8.88815 14.4444 8.88889H5.55556C5.24074 8.88889 4.97667 8.99556 4.76333 9.20889C4.55 9.42222 4.44371 9.68593 4.44445 10C4.44445 10.3148 4.55111 10.5789 4.76445 10.7922C4.97778 11.0056 5.24148 11.1119 5.55556 11.1111ZM5.55556 6.66667H14.4444C14.7593 6.66667 15.0233 6.56 15.2367 6.34667C15.45 6.13333 15.5563 5.86963 15.5556 5.55556C15.5556 5.24074 15.4489 4.97667 15.2356 4.76333C15.0222 4.55 14.7585 4.44371 14.4444 4.44445H5.55556C5.24074 4.44445 4.97667 4.55111 4.76333 4.76445C4.55 4.97778 4.44371 5.24148 4.44445 5.55556C4.44445 5.87037 4.55111 6.13445 4.76445 6.34778C4.97778 6.56111 5.24148 6.66741 5.55556 6.66667ZM2.22222 20C1.61111 20 1.08778 19.7822 0.652224 19.3467C0.216668 18.9111 -0.000738854 18.3881 1.88644e-06 17.7778V2.22222C1.88644e-06 1.61111 0.21778 1.08778 0.653335 0.652224C1.08889 0.216668 1.61185 -0.000738854 2.22222 1.88644e-06H17.7778C18.3889 1.88644e-06 18.9122 0.21778 19.3478 0.653335C19.7833 1.08889 20.0007 1.61185 20 2.22222V17.7778C20 18.3889 19.7822 18.9122 19.3467 19.3478C18.9111 19.7833 18.3881 20.0007 17.7778 20H2.22222Z" fill="#F8F8F8"/>
                                </svg>

                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= SITE_URL ?>/admin/options">
                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2793 0.152C10.9093 -4.47035e-08 10.4393 0 9.50032 0C8.56132 0 8.09132 -4.47035e-08 7.72132 0.152C7.22877 0.354211 6.8367 0.743765 6.63132 1.235C6.53732 1.458 6.50132 1.719 6.48632 2.098C6.47965 2.3726 6.40305 2.64097 6.26376 2.87772C6.12448 3.11447 5.92711 3.31178 5.69032 3.451C5.44906 3.5851 5.17786 3.65615 4.90184 3.65754C4.62582 3.65894 4.35392 3.59065 4.11132 3.459C3.77332 3.281 3.52832 3.183 3.28632 3.151C2.75687 3.08148 2.22139 3.2238 1.79632 3.547C1.47832 3.789 1.24332 4.193 0.774315 5C0.304315 5.807 0.0703155 6.21 0.0173155 6.605C-0.0526845 7.131 0.0913156 7.663 0.417316 8.084C0.565316 8.276 0.774316 8.437 1.09732 8.639C1.57432 8.936 1.88032 9.442 1.88032 10C1.88032 10.558 1.57432 11.064 1.09832 11.36C0.774316 11.563 0.565315 11.724 0.416315 11.916C0.255398 12.1239 0.137285 12.3617 0.0687999 12.6156C0.000314891 12.8694 -0.0171837 13.1343 0.0173155 13.395C0.0703155 13.789 0.304315 14.193 0.774315 15C1.24432 15.807 1.47832 16.21 1.79632 16.453C2.22032 16.776 2.75632 16.918 3.28632 16.849C3.52832 16.817 3.77332 16.719 4.11132 16.541C4.35404 16.4092 4.62613 16.3408 4.90234 16.3422C5.17855 16.3436 5.44994 16.4147 5.69132 16.549C6.17732 16.829 6.46532 17.344 6.48632 17.902C6.50132 18.282 6.53732 18.542 6.63132 18.765C6.83532 19.255 7.22732 19.645 7.72132 19.848C8.09132 20 8.56132 20 9.50032 20C10.4393 20 10.9093 20 11.2793 19.848C11.7719 19.6458 12.1639 19.2562 12.3693 18.765C12.4633 18.542 12.4993 18.282 12.5143 17.902C12.5343 17.344 12.8233 16.828 13.3103 16.549C13.5516 16.4149 13.8228 16.3439 14.0988 16.3425C14.3748 16.3411 14.6467 16.4093 14.8893 16.541C15.2273 16.719 15.4723 16.817 15.7143 16.849C16.2443 16.919 16.7803 16.776 17.2043 16.453C17.5223 16.211 17.7573 15.807 18.2263 15C18.6963 14.193 18.9303 13.79 18.9833 13.395C19.0177 13.1343 19 12.8693 18.9314 12.6155C18.8627 12.3616 18.7444 12.1239 18.5833 11.916C18.4353 11.724 18.2263 11.563 17.9033 11.361C17.4263 11.064 17.1203 10.558 17.1203 10C17.1203 9.442 17.4263 8.936 17.9023 8.64C18.2263 8.437 18.4353 8.276 18.5843 8.084C18.7452 7.87606 18.8633 7.63829 18.9318 7.38443C19.0003 7.13057 19.0178 6.86566 18.9833 6.605C18.9303 6.211 18.6963 5.807 18.2263 5C17.7563 4.193 17.5223 3.79 17.2043 3.547C16.7792 3.2238 16.2438 3.08148 15.7143 3.151C15.4723 3.183 15.2273 3.281 14.8893 3.459C14.6466 3.59083 14.3745 3.65922 14.0983 3.65782C13.8221 3.65642 13.5507 3.58528 13.3093 3.451C13.0727 3.31166 12.8755 3.11429 12.7364 2.87755C12.5973 2.64081 12.5209 2.37251 12.5143 2.098C12.4993 1.718 12.4633 1.458 12.3693 1.235C12.2677 0.991736 12.1191 0.770883 11.9321 0.585058C11.745 0.399233 11.5232 0.252078 11.2793 0.152ZM9.50032 13C11.1703 13 12.5233 11.657 12.5233 10C12.5233 8.343 11.1693 7 9.50032 7C7.83032 7 6.47732 8.343 6.47732 10C6.47732 11.657 7.83132 13 9.50032 13Z" fill="#F8F8F8"/>
                                </svg>
                                <span>Options</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom">
                    <a class="" href="<?= SITE_URL ?>">
            
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="back"  fill="none" stroke="currentColor" d="M5 5L1 9M1 9L5 13M1 9H12C13.0609 9 14.0783 8.57857 14.8284 7.82843C15.5786 7.07828 16 6.06087 16 5C16 3.93913 15.5786 2.92172 14.8284 2.17157C14.0783 1.42143 13.0609 1 12 1H11" stroke="#F8F8F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <span>Revenir au site</span>
                    </a>
                    
                    <a href="<?= SITE_URL ?>/admin/deconnexion">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0H11C11.5304 0 12.0391 0.210714 12.4142 0.585786C12.7893 0.960859 13 1.46957 13 2V3C13 3.26522 12.8946 3.51957 12.7071 3.70711C12.5196 3.89464 12.2652 4 12 4C11.7348 4 11.4804 3.89464 11.2929 3.70711C11.1054 3.51957 11 3.26522 11 3V2H2V18H11V17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17V18C13 18.5304 12.7893 19.0391 12.4142 19.4142C12.0391 19.7893 11.5304 20 11 20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0Z" fill="currentColor"/>
                            <path d="M12.795 14.2951C13.185 14.6851 13.815 14.6851 14.205 14.2951L17.793 10.7071C17.9805 10.5196 18.0858 10.2653 18.0858 10.0001C18.0858 9.73496 17.9805 9.48065 17.793 9.29313L14.205 5.70513C14.0149 5.53332 13.7661 5.44112 13.5099 5.44758C13.2538 5.45405 13.0099 5.55869 12.8287 5.73987C12.6476 5.92104 12.5429 6.16491 12.5365 6.42106C12.53 6.6772 12.6222 6.92604 12.794 7.11613L14.67 9.00013H6C5.73478 9.00013 5.48043 9.10548 5.29289 9.29302C5.10536 9.48056 5 9.73491 5 10.0001C5 10.2653 5.10536 10.5197 5.29289 10.7072C5.48043 10.8948 5.73478 11.0001 6 11.0001H14.67L12.794 12.8841C12.6073 13.0715 12.5026 13.3253 12.5028 13.5898C12.503 13.8543 12.6081 14.108 12.795 14.2951Z" fill="currentColor"/>
                        </svg>
                        <span>Se déconnecter</span>
                    </a>
                </div>
            </nav>
            <div class="content">
                <?php require_once($datas['view']); ?>
            </div>

            <!--Info message system-->
            <?php require_once('Views/parts/message.php'); ?>
        </div>

    </main>
    
</body>
</html>