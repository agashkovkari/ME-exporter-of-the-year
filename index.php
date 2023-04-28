<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бизнес-миссии за рубеж");
$APPLICATION->AddHeadString('<meta property="og:image" content="https://moscow-export.com/upload/File on site/example_test.png" />');
$APPLICATION->AddHeadScript('https://code.jquery.com/ui/1.13.0/jquery-ui.js');
?>
<!-- -----start top banner section----- -->
<section class="tw-wrapper md:tw-flex md:tw-items-center md:tw-min-h-[350px] lg:tw-h-[620px] tw-border-0">
  <div class="tw-wrap md:tw-flex md:tw-items-center md:tw-w-full md:tw-h-full tw-z-0">
    <div class="md:tw-w-3/5 lg:tw-w-3/4">
      <h1 class="lg:tw-text-[4.375rem] lg:tw-leading-none tw-uppercase lg:tw-normal-case">
        Региональный конкурс<br />
        <span class="lg:tw-text-[6.25rem]">«Экспортер года»</span>
      </h1>
      <div
        class="md:tw-absolute md:tw-top-0 md:tw-right-12.5 md:tw-bottom-0 md:tw-flex md:tw-justify-end md:tw-items-center md:tw-max-w-1/2 -tw-z-10">
        <img class="md:tw-max-w-[50%] lg:tw-max-w-none lg:tw-max-h-full" src="img/exporter_banner.png" alt />
      </div>
      <div>
        <a class="tw-btn tw-btn-gradient md:tw-mt-8 lg:tw-mt-12.5 tw-rounded-[15px]" href="#form-land">Подать заявку</a>
      </div>
    </div>
  </div>
</section>
<!-- -----end top banner section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper tw-border-0">
  <div class="tw-wrap">
    <h3 class="tw-font-bold">Экспортировали в 2022?</h3>
    <h3 class="tw-mb-8 lg:tw-mb-20 tw-font-bold">Расскажите об этом!</h3>
    <div class="tw-relative tw-grid lg:tw-grid-cols-2 tw-gap-y-7.5 tw-gap-x-20">
      <div
        class="tw-relative tw-flex tw-gap-5 md:tw-gap-x-7.5 lg:tw-gap-0 tw-justify-between tw-items-center tw-px-7.5 md:tw-px-12.5 lg:tw-pl-16 lg:tw-pr-25 tw-py-5 md:tw-py-10 lg:tw-py-15 tw-border tw-border-mec-gray-500 tw-font-bold tw-bg-white">
        <div>Награждение победителей и призеров в 10 номинациях</div>
        <svg
          class="lg:tw-absolute lg:tw-top-5 lg:tw-right-5 tw-flex-shrink-0 tw-w-[50px] md:tw-w-[72px] lg:tw-w-[77px] tw-h-[48px] md:tw-h-[70px] lg:tw-h-[72px]"
          viewBox="0 0 77 72" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_4481_605)">
            <path
              d="M57.75 2.25C58.0503 2.25 58.3383 2.13147 58.5507 1.9205C58.7631 1.70952 58.8824 1.42337 58.8824 1.125C58.8824 0.826631 58.7631 0.540483 58.5507 0.329505C58.3383 0.118526 58.0503 0 57.75 0L19.25 0C18.9497 0 18.6617 0.118526 18.4493 0.329505C18.237 0.540483 18.1177 0.826631 18.1177 1.125C18.1177 1.42337 18.237 1.70952 18.4493 1.9205C18.6617 2.13147 18.9497 2.25 19.25 2.25H57.75ZM57.75 4.5H14.7206C7.28557 4.5 3.82057 7.1235 2.22169 9.324C0.264985 12.024 -0.101897 15.6307 1.18899 19.4805C3.18646 25.434 9.89904 32.5868 14.0253 35.7638C14.2629 35.9469 14.564 36.0289 14.8623 35.9915C15.1607 35.9542 15.4319 35.8006 15.6163 35.5646C15.8007 35.3286 15.8832 35.0295 15.8456 34.7331C15.808 34.4366 15.6534 34.1672 15.4159 33.984C11.6247 31.068 5.16807 24.2145 3.34046 18.7673C2.28284 15.624 2.53875 12.7373 4.06063 10.6403C5.90637 8.0955 9.59104 6.75 14.7206 6.75H18.1177V28.125C18.1177 43.2585 33.23 51.9773 36.3168 53.5995C36.2655 53.727 36.2379 53.8627 36.2353 54V59.625C36.2353 59.9234 36.3546 60.2095 36.567 60.4205C36.7793 60.6315 37.0673 60.75 37.3677 60.75C37.668 60.75 37.956 60.6315 38.1684 60.4205C38.3807 60.2095 38.5 59.9234 38.5 59.625V54C38.4962 53.8737 38.4709 53.7489 38.4253 53.631C41.854 52.029 58.8824 43.3125 58.8824 28.125V6.75H62.2794C67.409 6.75 71.0937 8.0955 72.9394 10.6403C74.4613 12.7373 74.7172 15.624 73.6596 18.7695C72.2328 23.0243 65.1239 31.2637 61.5842 33.9862C61.3466 34.1694 61.192 34.4389 61.1544 34.7353C61.1169 35.0317 61.1993 35.3309 61.3837 35.5669C61.5681 35.8029 61.8393 35.9565 62.1377 35.9938C62.4361 36.0311 62.7371 35.9492 62.9747 35.766C66.8972 32.7465 74.2099 24.2483 75.811 19.4827C77.1019 15.633 76.735 12.0262 74.7783 9.32625C73.1795 7.1235 69.7144 4.5 62.2794 4.5H57.75ZM56.6177 28.125C56.6177 41.8343 40.4205 50.184 37.3994 51.6217C34.6183 50.1255 20.3824 41.796 20.3824 28.125V6.75H56.6177V28.125ZM24.9118 63C22.3277 63 20.3824 64.935 20.3824 67.5V70.875C20.3824 71.1734 20.5017 71.4595 20.714 71.6705C20.9264 71.8815 21.2144 72 21.5147 72H53.2206C53.5209 72 53.8089 71.8815 54.0213 71.6705C54.2337 71.4595 54.353 71.1734 54.353 70.875V67.6688C54.353 65.052 52.3623 63 49.8235 63H24.9118ZM52.0882 67.6688V69.75H22.6471V67.5C22.6471 66.1748 23.5779 65.25 24.9118 65.25H49.8235C51.1144 65.25 52.0882 66.2895 52.0882 67.6688Z"
              fill="#C00D0D" />
          </g>
        </svg>
      </div>
      <div
        class="tw-relative tw-flex tw-gap-5 md:tw-gap-x-7.5 lg:tw-gap-0 tw-justify-between tw-items-center tw-px-7.5 md:tw-px-12.5 lg:tw-pl-16 lg:tw-pr-25 tw-py-5 md:tw-py-10 lg:tw-py-15 tw-border tw-border-mec-gray-500 tw-font-bold tw-bg-white">
        <div>Крупнейшее профильное мероприятие для экспортеров</div>
        <svg
          class="lg:tw-absolute lg:tw-top-5 lg:tw-right-5 tw-flex-shrink-0 tw-w-[56px] md:tw-w-[70px] lg:tw-w-[75px] tw-h-[56px] md:tw-h-[70px] lg:tw-h-[70px]"
          width="75" height="70" viewBox="0 0 75 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M37.5 2.03659L48.8489 22.1716L49.0736 22.5703L49.5223 22.6608L72.1788 27.2322L56.5363 44.2477L56.2265 44.5846L56.2791 45.0393L58.9327 67.9995L37.9162 58.3807L37.5 58.1902L37.0838 58.3807L16.0673 67.9995L18.7209 45.0393L18.7735 44.5846L18.4637 44.2477L2.82124 27.2322L25.4777 22.6608L25.9264 22.5703L26.1511 22.1716L37.5 2.03659Z"
            stroke="#C00D0D" stroke-width="2" />
        </svg>
      </div>
      <svg
        class="tw-absolute -tw-z-10 -tw-bottom-[75px] lg:-tw-bottom-[50px] tw-right-1/3 lg:tw-right-1/2 tw-hidden md:tw-block"
        width="113" height="113" viewBox="0 0 113 113" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle r="55.5" transform="matrix(1 0 0 -1 56.5 56.5)" stroke="#C00D0D" stroke-width="2"
          stroke-dasharray="10 10" />
      </svg>
    </div>
    <svg class="tw-absolute -tw-top-[15px] lg:-tw-top-[30px] tw-left-[30px] tw-hidden md:tw-block" width="45"
      height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle r="21.5" transform="matrix(1 0 0 -1 22.5 22.5)" stroke="#C00D0D" stroke-width="2"
        stroke-dasharray="10 10" />
    </svg>
  </div>
</section>
<!-- -----end section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper tw-border-0">
  <div class="tw-wrap">
    <h3 class="tw-mb-8 tw-font-bold">О конкурсе</h3>
    <div>
      <span class="tw-font-bold tw-text-mec-red-300">Региональный конкурс «Экспортер года»</span> проводится для МСП,
      ИП
      и крупных компаний, которые достигли успехов в экспортной деятельности
      с 1 января по 31 декабря 2022 года.
    </div>
    <div class="tw-mt-5">
      <div class="tw-mb-5"><a class="tw-underline"
          href="https://moscow-export.com/upload/File%20on%20site/Положение_МЭЦ_Экспортер_года_2022.pdf"
          target="_blank">Положение о проведении ежегодного регионального конкурса «Экспортер года»</a></div>
      <!-- <div><a class="tw-underline"
            href="https://moscow-export.com/upload/File%20on%20site/Состав%20членов%20комиссии%20по%20конкурсу%20Экспортер%20года.pdf"
            target="_blank">Состав членов комиссии по подведению итогов конкурса «Экспортер года»</a></div> -->
    </div>
  </div>
</section>
<!-- -----end section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper tw-border-0">
  <div class="tw-wrap">
    <h3 class="tw-mb-15 tw-font-bold">Основные номинации:</h3>
    <div class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17">
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере готового продовольствия (высокие переделы)<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-01.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере готового продовольствия (высокие переделы)<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-02.png" alt />
        </div>
      </div>
    </div>
    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере промышленности<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-03.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере промышленности<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-04.png" alt />
        </div>
      </div>

    </div>
    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере услуг<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-05.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере услуг<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-06.png" alt />
        </div>
      </div>

    </div>

    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере машиностроения<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-08.png" alt />
        </div>
      </div>

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере базовой продукции агропромышленного комплекса<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-09.png" alt />
        </div>
      </div>
    </div>

    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере машиностроения<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-10.png" alt />
        </div>
      </div>

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Экспортер года в сфере базовой продукции агропромышленного комплекса<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-11.png" alt />
        </div>
      </div>
    </div>
    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Трейдер года<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-07.png" alt />
        </div>
      </div>

      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Трейдер года<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-12.png" alt />
        </div>
      </div>
    </div>

    <h3 class="tw-mt-9 md:tw-mt-17 lg:tw-mt-20 tw-mb-15 tw-font-bold">Дополнительные номинации:</h3>
    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Прорыв года<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-08.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Новая география<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-09.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Лучший молодой предприниматель-экспортер<br>
          <span class="tw-text-small-size">(для МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-10.png" alt />
        </div>
      </div>
    </div>

    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Трейдер года<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-08.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Ответственный экспортер (ESG)<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-09.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Лучшая женщина-экспортер<br>
          <span class="tw-text-small-size">(для крупного бизнеса)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-10.png" alt />
        </div>
      </div>
    </div>

    <div
      class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-9 md:tw-gap-y-17 tw-mt-9 md:tw-mt-17 lg:tw-mt-20">
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Ответственный экспортер (ESG)<br>
          <span class="tw-text-small-size">((МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-08.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Лучшая женщина-экспортер<br>
          <span class="tw-text-small-size">(МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-09.png" alt />
        </div>
      </div>
      <div
        class="tw-relative tw-flex tw-items-center lg:tw-flex-1 tw-h-[80px] md:tw-h-[140px] tw-ml-3 md:tw-ml-6.5 tw-p-7.5 tw-pl-15 md:tw-pl-25 tw-bg-mec-gray-300 hover:tw-bg-[#D94949] hover:tw-text-white tw-font-bold tw-shadow-[0px_4px_10px_rgba(0,0,0,0.3)]">
        <div>
          Лучший экспортер в сфере электронной торговли<br>
          <span class="tw-text-small-size">(МСП)</span>
        </div>
        <div class="tw-absolute -tw-top-3 md:-tw-top-6.5 -tw-left-3 md:-tw-left-6.5">
          <img class="tw-w-[58px] md:tw-w-[114px] tw-h-[58px] md:tw-h-[114px]" src="./img/2023/nomination-10.png" alt />
        </div>
      </div>
    </div>

  </div>
</section>
<!-- -----end section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper tw-relative -tw-z-10 border-0 tw-bg-mec-gray-300">
  <div class="tw-wrap">
    <h3 class="tw-mb-7.5 lg:tw-mb-12.5 tw-font-bold">Кто может подать заявку?</h3>
    <div class="tw-font-bold tw-mb-12.5">Подать заявку можно на одну номинацию из основного состава и выбрать
      неограниченное количество дополнительных номинаций.</div>
    <div class="tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-7.5 lg:tw-gap-y-12.5"
      style="counter-reset: num">
      <div class="tw-flex-1">
        <ul>
          <li class="tw-number"><span class="tw-text-black">Компания зарегистрирована на территории Москвы</span></li>
          <li class="tw-number !tw-mt-7.5 lg:!tw-mt-12.5"><span class="tw-text-black">Компания зарегистрирована более
              6
              месяцев</span></li>
          <li class="tw-number !tw-mt-7.5 lg:!tw-mt-12.5"><span class="tw-text-black">Отсутствие задолженности по
              налогами, сборам, пеням и штрафам</span></li>
        </ul>
      </div>
      <div class="tw-flex-1">
        <ul>
          <li class="tw-number"><span class="tw-text-black">Отсутствие проведения в отношении Заявителя процедуры
              реорганизации, ликвидации или банкротства</span></li>
          <li class="tw-number !tw-mt-7.5 lg:!tw-mt-12.5"><span class="tw-text-black">ИП не должны находится в
              процессе
              прекращения деятельности физического лица</span></li>
          <li class="tw-number !tw-mt-7.5 lg:!tw-mt-12.5">
            <span class="tw-text-black">Юридические лица не должны являться иностранными юридическими лицами, а также
              российскими юридическими лицами, в уставном капитале которых доля участия иностранных
              юридических лиц в совокупности превышает 50%</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- -----end section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper border-0">
  <div class="tw-wrap lg:tw-mt-12.5">
    <div
      class="tw-flex tw-flex-col-reverse lg:tw-flex-row lg:tw-justify-between lg:tw-items-center tw-gap-y-7.5 tw-gap-x-20">
      <div class="tw-pt-[120px] lg:tw-pt-0 tw-flex-1 tw-flex-shrink-0">
        <h3 class="tw-font-bold tw-text-mec-red-300">Прием заявок</h3>
        <div
          class="tw-flex tw-gap-x-6 tw-justify-between lg:tw-justify-start tw-items-end tw-mt-5 tw-mb-12.5 tw-pl-7.5 2.5 tw-font-bold">
          <svg class="sm:tw-hidden" width="48" height="97" viewBox="0 0 48 97" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 1V0H0V1H2ZM1 89H0V90H1V89ZM47.7071 89.7071C48.0976 89.3166 48.0976 88.6834 47.7071 88.2929L41.3431 81.9289C40.9526 81.5384 40.3195 81.5384 39.9289 81.9289C39.5384 82.3195 39.5384 82.9526 39.9289 83.3431L45.5858 89L39.9289 94.6569C39.5384 95.0474 39.5384 95.6805 39.9289 96.0711C40.3195 96.4616 40.9526 96.4616 41.3431 96.0711L47.7071 89.7071ZM0 4.14286V5.14286H2V4.14286H0ZM2 10.4286V9.42857H0V10.4286H2ZM0 16.7143V17.7143H2V16.7143H0ZM2 23V22H0V23H2ZM0 29.2857V30.2857H2V29.2857H0ZM2 35.5714V34.5714H0V35.5714H2ZM0 41.8571V42.8571H2V41.8571H0ZM2 48.1428V47.1428H0V48.1428H2ZM0 54.4286V55.4286H2V54.4286H0ZM2 60.7143V59.7143H0V60.7143H2ZM0 67V68H2V67H0ZM2 73.2857V72.2857H0V73.2857H2ZM0 79.5714V80.5714H2V79.5714H0ZM2 85.8571V84.8571H0V85.8571H2ZM3.875 90H4.875V88H3.875V90ZM9.625 88H8.625V90H9.625V88ZM15.375 90H16.375V88H15.375V90ZM21.125 88H20.125V90H21.125V88ZM26.875 90H27.875V88H26.875V90ZM32.625 88H31.625V90H32.625V88ZM38.375 90H39.375V88H38.375V90ZM44.125 88H43.125V90H44.125V88ZM0 1V4.14286H2V1H0ZM0 10.4286V16.7143H2V10.4286H0ZM0 23V29.2857H2V23H0ZM0 35.5714V41.8571H2V35.5714H0ZM0 48.1428V54.4286H2V48.1428H0ZM0 60.7143V67H2V60.7143H0ZM0 73.2857V79.5714H2V73.2857H0ZM0 85.8571V89H2V85.8571H0ZM1 90H3.875V88H1V90ZM9.625 90H15.375V88H9.625V90ZM21.125 90H26.875V88H21.125V90ZM32.625 90H38.375V88H32.625V90ZM44.125 90H47V88H44.125V90Z"
              fill="#C00D0D" />
          </svg>
          <svg class="tw-hidden sm:tw-block" width="151" height="114" viewBox="0 0 151 114" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 1V0H0V1H2ZM1 106H0V107H1V106ZM150.707 106.707C151.098 106.317 151.098 105.683 150.707 105.293L144.343 98.9289C143.953 98.5384 143.319 98.5384 142.929 98.9289C142.538 99.3195 142.538 99.9526 142.929 100.343L148.586 106L142.929 111.657C142.538 112.047 142.538 112.681 142.929 113.071C143.319 113.462 143.953 113.462 144.343 113.071L150.707 106.707ZM0 3.91667V4.91667H2V3.91667H0ZM2 9.75V8.75H0V9.75H2ZM0 15.5833V16.5833H2V15.5833H0ZM2 21.4167V20.4167H0V21.4167H2ZM0 27.25V28.25H2V27.25H0ZM2 33.0833V32.0833H0V33.0833H2ZM0 38.9167V39.9167H2V38.9167H0ZM2 44.75V43.75H0V44.75H2ZM0 50.5833V51.5833H2V50.5833H0ZM2 56.4167V55.4167H0V56.4167H2ZM0 62.25V63.25H2V62.25H0ZM2 68.0833V67.0833H0V68.0833H2ZM0 73.9167V74.9167H2V73.9167H0ZM2 79.75V78.75H0V79.75H2ZM0 85.5833V86.5833H2V85.5833H0ZM2 91.4167V90.4167H0V91.4167H2ZM0 97.25V98.25H2V97.25H0ZM2 103.083V102.083H0V103.083H2ZM4.10417 107H5.10417V105H4.10417V107ZM10.3125 105H9.3125V107H10.3125V105ZM16.5208 107H17.5208V105H16.5208V107ZM22.7292 105H21.7292V107H22.7292V105ZM28.9375 107H29.9375V105H28.9375V107ZM35.1458 105H34.1458V107H35.1458V105ZM41.3542 107H42.3542V105H41.3542V107ZM47.5625 105H46.5625V107H47.5625V105ZM53.7708 107H54.7708V105H53.7708V107ZM59.9792 105H58.9792V107H59.9792V105ZM66.1875 107H67.1875V105H66.1875V107ZM72.3958 105H71.3958V107H72.3958V105ZM78.6042 107H79.6042V105H78.6042V107ZM84.8125 105H83.8125V107H84.8125V105ZM91.0208 107H92.0208V105H91.0208V107ZM97.2292 105H96.2292V107H97.2292V105ZM103.438 107H104.438V105H103.438V107ZM109.646 105H108.646V107H109.646V105ZM115.854 107H116.854V105H115.854V107ZM122.063 105H121.063V107H122.063V105ZM128.271 107H129.271V105H128.271V107ZM134.479 105H133.479V107H134.479V105ZM140.688 107H141.688V105H140.688V107ZM146.896 105H145.896V107H146.896V105ZM0 1V3.91667H2V1H0ZM0 9.75V15.5833H2V9.75H0ZM0 21.4167V27.25H2V21.4167H0ZM0 33.0833V38.9167H2V33.0833H0ZM0 44.75V50.5833H2V44.75H0ZM0 56.4167V62.25H2V56.4167H0ZM0 68.0833V73.9167H2V68.0833H0ZM0 79.75V85.5833H2V79.75H0ZM0 91.4167V97.25H2V91.4167H0ZM0 103.083V106H2V103.083H0ZM1 107H4.10417V105H1V107ZM10.3125 107H16.5208V105H10.3125V107ZM22.7292 107H28.9375V105H22.7292V107ZM35.1458 107H41.3542V105H35.1458V107ZM47.5625 107H53.7708V105H47.5625V107ZM59.9792 107H66.1875V105H59.9792V107ZM72.3958 107H78.6042V105H72.3958V107ZM84.8125 107H91.0208V105H84.8125V107ZM97.2292 107H103.438V105H97.2292V107ZM109.646 107H115.854V105H109.646V107ZM122.063 107H128.271V105H122.063V107ZM134.479 107H140.688V105H134.479V107ZM146.896 107H150V105H146.896V107Z"
              fill="#C00D0D" />
          </svg>
          <div class="tw-block md:-tw-mb-4">до <span class="tw-h1 md:tw-text-[3.5rem] tw-font-bold">19 мая</span>
          </div>
        </div>
        <h3 class="tw-font-bold tw-text-mec-red-300">Проведение конкурсной комиссии</h3>
        <div
          class="tw-flex tw-gap-x-6 tw-justify-between lg:tw-justify-start tw-items-end tw-mt-5 tw-mb-12.5 tw-pl-7.5 2.5 tw-font-bold">
          <svg class="sm:tw-hidden" width="48" height="97" viewBox="0 0 48 97" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 1V0H0V1H2ZM1 89H0V90H1V89ZM47.7071 89.7071C48.0976 89.3166 48.0976 88.6834 47.7071 88.2929L41.3431 81.9289C40.9526 81.5384 40.3195 81.5384 39.9289 81.9289C39.5384 82.3195 39.5384 82.9526 39.9289 83.3431L45.5858 89L39.9289 94.6569C39.5384 95.0474 39.5384 95.6805 39.9289 96.0711C40.3195 96.4616 40.9526 96.4616 41.3431 96.0711L47.7071 89.7071ZM0 4.14286V5.14286H2V4.14286H0ZM2 10.4286V9.42857H0V10.4286H2ZM0 16.7143V17.7143H2V16.7143H0ZM2 23V22H0V23H2ZM0 29.2857V30.2857H2V29.2857H0ZM2 35.5714V34.5714H0V35.5714H2ZM0 41.8571V42.8571H2V41.8571H0ZM2 48.1428V47.1428H0V48.1428H2ZM0 54.4286V55.4286H2V54.4286H0ZM2 60.7143V59.7143H0V60.7143H2ZM0 67V68H2V67H0ZM2 73.2857V72.2857H0V73.2857H2ZM0 79.5714V80.5714H2V79.5714H0ZM2 85.8571V84.8571H0V85.8571H2ZM3.875 90H4.875V88H3.875V90ZM9.625 88H8.625V90H9.625V88ZM15.375 90H16.375V88H15.375V90ZM21.125 88H20.125V90H21.125V88ZM26.875 90H27.875V88H26.875V90ZM32.625 88H31.625V90H32.625V88ZM38.375 90H39.375V88H38.375V90ZM44.125 88H43.125V90H44.125V88ZM0 1V4.14286H2V1H0ZM0 10.4286V16.7143H2V10.4286H0ZM0 23V29.2857H2V23H0ZM0 35.5714V41.8571H2V35.5714H0ZM0 48.1428V54.4286H2V48.1428H0ZM0 60.7143V67H2V60.7143H0ZM0 73.2857V79.5714H2V73.2857H0ZM0 85.8571V89H2V85.8571H0ZM1 90H3.875V88H1V90ZM9.625 90H15.375V88H9.625V90ZM21.125 90H26.875V88H21.125V90ZM32.625 90H38.375V88H32.625V90ZM44.125 90H47V88H44.125V90Z"
              fill="#C00D0D" />
          </svg>
          <svg class="tw-hidden sm:tw-block" width="151" height="114" viewBox="0 0 151 114" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 1V0H0V1H2ZM1 106H0V107H1V106ZM150.707 106.707C151.098 106.317 151.098 105.683 150.707 105.293L144.343 98.9289C143.953 98.5384 143.319 98.5384 142.929 98.9289C142.538 99.3195 142.538 99.9526 142.929 100.343L148.586 106L142.929 111.657C142.538 112.047 142.538 112.681 142.929 113.071C143.319 113.462 143.953 113.462 144.343 113.071L150.707 106.707ZM0 3.91667V4.91667H2V3.91667H0ZM2 9.75V8.75H0V9.75H2ZM0 15.5833V16.5833H2V15.5833H0ZM2 21.4167V20.4167H0V21.4167H2ZM0 27.25V28.25H2V27.25H0ZM2 33.0833V32.0833H0V33.0833H2ZM0 38.9167V39.9167H2V38.9167H0ZM2 44.75V43.75H0V44.75H2ZM0 50.5833V51.5833H2V50.5833H0ZM2 56.4167V55.4167H0V56.4167H2ZM0 62.25V63.25H2V62.25H0ZM2 68.0833V67.0833H0V68.0833H2ZM0 73.9167V74.9167H2V73.9167H0ZM2 79.75V78.75H0V79.75H2ZM0 85.5833V86.5833H2V85.5833H0ZM2 91.4167V90.4167H0V91.4167H2ZM0 97.25V98.25H2V97.25H0ZM2 103.083V102.083H0V103.083H2ZM4.10417 107H5.10417V105H4.10417V107ZM10.3125 105H9.3125V107H10.3125V105ZM16.5208 107H17.5208V105H16.5208V107ZM22.7292 105H21.7292V107H22.7292V105ZM28.9375 107H29.9375V105H28.9375V107ZM35.1458 105H34.1458V107H35.1458V105ZM41.3542 107H42.3542V105H41.3542V107ZM47.5625 105H46.5625V107H47.5625V105ZM53.7708 107H54.7708V105H53.7708V107ZM59.9792 105H58.9792V107H59.9792V105ZM66.1875 107H67.1875V105H66.1875V107ZM72.3958 105H71.3958V107H72.3958V105ZM78.6042 107H79.6042V105H78.6042V107ZM84.8125 105H83.8125V107H84.8125V105ZM91.0208 107H92.0208V105H91.0208V107ZM97.2292 105H96.2292V107H97.2292V105ZM103.438 107H104.438V105H103.438V107ZM109.646 105H108.646V107H109.646V105ZM115.854 107H116.854V105H115.854V107ZM122.063 105H121.063V107H122.063V105ZM128.271 107H129.271V105H128.271V107ZM134.479 105H133.479V107H134.479V105ZM140.688 107H141.688V105H140.688V107ZM146.896 105H145.896V107H146.896V105ZM0 1V3.91667H2V1H0ZM0 9.75V15.5833H2V9.75H0ZM0 21.4167V27.25H2V21.4167H0ZM0 33.0833V38.9167H2V33.0833H0ZM0 44.75V50.5833H2V44.75H0ZM0 56.4167V62.25H2V56.4167H0ZM0 68.0833V73.9167H2V68.0833H0ZM0 79.75V85.5833H2V79.75H0ZM0 91.4167V97.25H2V91.4167H0ZM0 103.083V106H2V103.083H0ZM1 107H4.10417V105H1V107ZM10.3125 107H16.5208V105H10.3125V107ZM22.7292 107H28.9375V105H22.7292V107ZM35.1458 107H41.3542V105H35.1458V107ZM47.5625 107H53.7708V105H47.5625V107ZM59.9792 107H66.1875V105H59.9792V107ZM72.3958 107H78.6042V105H72.3958V107ZM84.8125 107H91.0208V105H84.8125V107ZM97.2292 107H103.438V105H97.2292V107ZM109.646 107H115.854V105H109.646V107ZM122.063 107H128.271V105H122.063V107ZM134.479 107H140.688V105H134.479V107ZM146.896 107H150V105H146.896V107Z"
              fill="#C00D0D" />
          </svg>
          <div class="tw-block md:-tw-mb-4"><span class="tw-h1 md:tw-text-[3.5rem] tw-font-bold">22 мая</span>
          </div>
        </div>
        <!-- <h3 class="tw-font-bold tw-text-mec-red-300">Проведение церемонии награждения</h3>
          <div class="tw-flex tw-gap-x-6 tw-justify-between lg:tw-justify-start tw-items-end tw-mt-5 tw-pl-7.5 2.5 tw-font-bold">
            <svg class="sm:tw-hidden" width="48" height="97" viewBox="0 0 48 97" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 1V0H0V1H2ZM1 89H0V90H1V89ZM47.7071 89.7071C48.0976 89.3166 48.0976 88.6834 47.7071 88.2929L41.3431 81.9289C40.9526 81.5384 40.3195 81.5384 39.9289 81.9289C39.5384 82.3195 39.5384 82.9526 39.9289 83.3431L45.5858 89L39.9289 94.6569C39.5384 95.0474 39.5384 95.6805 39.9289 96.0711C40.3195 96.4616 40.9526 96.4616 41.3431 96.0711L47.7071 89.7071ZM0 4.14286V5.14286H2V4.14286H0ZM2 10.4286V9.42857H0V10.4286H2ZM0 16.7143V17.7143H2V16.7143H0ZM2 23V22H0V23H2ZM0 29.2857V30.2857H2V29.2857H0ZM2 35.5714V34.5714H0V35.5714H2ZM0 41.8571V42.8571H2V41.8571H0ZM2 48.1428V47.1428H0V48.1428H2ZM0 54.4286V55.4286H2V54.4286H0ZM2 60.7143V59.7143H0V60.7143H2ZM0 67V68H2V67H0ZM2 73.2857V72.2857H0V73.2857H2ZM0 79.5714V80.5714H2V79.5714H0ZM2 85.8571V84.8571H0V85.8571H2ZM3.875 90H4.875V88H3.875V90ZM9.625 88H8.625V90H9.625V88ZM15.375 90H16.375V88H15.375V90ZM21.125 88H20.125V90H21.125V88ZM26.875 90H27.875V88H26.875V90ZM32.625 88H31.625V90H32.625V88ZM38.375 90H39.375V88H38.375V90ZM44.125 88H43.125V90H44.125V88ZM0 1V4.14286H2V1H0ZM0 10.4286V16.7143H2V10.4286H0ZM0 23V29.2857H2V23H0ZM0 35.5714V41.8571H2V35.5714H0ZM0 48.1428V54.4286H2V48.1428H0ZM0 60.7143V67H2V60.7143H0ZM0 73.2857V79.5714H2V73.2857H0ZM0 85.8571V89H2V85.8571H0ZM1 90H3.875V88H1V90ZM9.625 90H15.375V88H9.625V90ZM21.125 90H26.875V88H21.125V90ZM32.625 90H38.375V88H32.625V90ZM44.125 90H47V88H44.125V90Z" fill="#C00D0D" />
            </svg>
            <svg class="tw-hidden sm:tw-block" width="151" height="114" viewBox="0 0 151 114" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 1V0H0V1H2ZM1 106H0V107H1V106ZM150.707 106.707C151.098 106.317 151.098 105.683 150.707 105.293L144.343 98.9289C143.953 98.5384 143.319 98.5384 142.929 98.9289C142.538 99.3195 142.538 99.9526 142.929 100.343L148.586 106L142.929 111.657C142.538 112.047 142.538 112.681 142.929 113.071C143.319 113.462 143.953 113.462 144.343 113.071L150.707 106.707ZM0 3.91667V4.91667H2V3.91667H0ZM2 9.75V8.75H0V9.75H2ZM0 15.5833V16.5833H2V15.5833H0ZM2 21.4167V20.4167H0V21.4167H2ZM0 27.25V28.25H2V27.25H0ZM2 33.0833V32.0833H0V33.0833H2ZM0 38.9167V39.9167H2V38.9167H0ZM2 44.75V43.75H0V44.75H2ZM0 50.5833V51.5833H2V50.5833H0ZM2 56.4167V55.4167H0V56.4167H2ZM0 62.25V63.25H2V62.25H0ZM2 68.0833V67.0833H0V68.0833H2ZM0 73.9167V74.9167H2V73.9167H0ZM2 79.75V78.75H0V79.75H2ZM0 85.5833V86.5833H2V85.5833H0ZM2 91.4167V90.4167H0V91.4167H2ZM0 97.25V98.25H2V97.25H0ZM2 103.083V102.083H0V103.083H2ZM4.10417 107H5.10417V105H4.10417V107ZM10.3125 105H9.3125V107H10.3125V105ZM16.5208 107H17.5208V105H16.5208V107ZM22.7292 105H21.7292V107H22.7292V105ZM28.9375 107H29.9375V105H28.9375V107ZM35.1458 105H34.1458V107H35.1458V105ZM41.3542 107H42.3542V105H41.3542V107ZM47.5625 105H46.5625V107H47.5625V105ZM53.7708 107H54.7708V105H53.7708V107ZM59.9792 105H58.9792V107H59.9792V105ZM66.1875 107H67.1875V105H66.1875V107ZM72.3958 105H71.3958V107H72.3958V105ZM78.6042 107H79.6042V105H78.6042V107ZM84.8125 105H83.8125V107H84.8125V105ZM91.0208 107H92.0208V105H91.0208V107ZM97.2292 105H96.2292V107H97.2292V105ZM103.438 107H104.438V105H103.438V107ZM109.646 105H108.646V107H109.646V105ZM115.854 107H116.854V105H115.854V107ZM122.063 105H121.063V107H122.063V105ZM128.271 107H129.271V105H128.271V107ZM134.479 105H133.479V107H134.479V105ZM140.688 107H141.688V105H140.688V107ZM146.896 105H145.896V107H146.896V105ZM0 1V3.91667H2V1H0ZM0 9.75V15.5833H2V9.75H0ZM0 21.4167V27.25H2V21.4167H0ZM0 33.0833V38.9167H2V33.0833H0ZM0 44.75V50.5833H2V44.75H0ZM0 56.4167V62.25H2V56.4167H0ZM0 68.0833V73.9167H2V68.0833H0ZM0 79.75V85.5833H2V79.75H0ZM0 91.4167V97.25H2V91.4167H0ZM0 103.083V106H2V103.083H0ZM1 107H4.10417V105H1V107ZM10.3125 107H16.5208V105H10.3125V107ZM22.7292 107H28.9375V105H22.7292V107ZM35.1458 107H41.3542V105H35.1458V107ZM47.5625 107H53.7708V105H47.5625V107ZM59.9792 107H66.1875V105H59.9792V107ZM72.3958 107H78.6042V105H72.3958V107ZM84.8125 107H91.0208V105H84.8125V107ZM97.2292 107H103.438V105H97.2292V107ZM109.646 107H115.854V105H109.646V107ZM122.063 107H128.271V105H122.063V107ZM134.479 107H140.688V105H134.479V107ZM146.896 107H150V105H146.896V107Z" fill="#C00D0D" />
            </svg>
            <div class="tw-block md:-tw-mb-4"><span class="tw-h1 md:tw-text-[3.5rem] tw-font-bold">1 июля</span></div>
          </div> -->
      </div>
      <svg
        class="tw-absolute tw-top-0 lg:tw-static tw-flex tw-justify-end tw-self-end lg:tw-self-center tw-flex-1 tw-w-[125px] md:tw-w-[240px] lg:tw-w-[417px] tw-h-[125px] md:tw-h-[240px] lg:tw-h-[417px]"
        viewBox="0 0 417 417" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 60H103.391H415V415H22V60Z" fill="white" stroke="#C00D0D" stroke-width="4"
          stroke-linecap="square" />
        <rect x="1" y="35.4484" width="389.847" height="351.785" fill="white" />
        <path d="M82.8909 35.4484H2.15344V387.233H392V35.4484H318.183" stroke="#C00D0D" stroke-width="4"
          stroke-linecap="square" />
        <path d="M129.027 35.4484H270.894" stroke="#C00D0D" stroke-width="4" stroke-linecap="square" />
        <path d="M293.962 2V74.6637" stroke="#C00D0D" stroke-width="4" stroke-linecap="square" />
        <path d="M107.112 2V73.5103" stroke="#C00D0D" stroke-width="4" stroke-linecap="square" />
        <path d="M3.30676 118.493H390.847" stroke="#C00D0D" stroke-width="4" stroke-linecap="square" />
        <rect x="51.4425" y="164.322" width="128.64" height="76.7375" rx="8" stroke="#C00D0D" stroke-width="4" />
        <rect x="212.917" y="164.322" width="128.64" height="76.7375" rx="8" stroke="#C00D0D" stroke-width="4" />
        <rect x="52.5958" y="263.513" width="128.64" height="76.7375" rx="8" stroke="#C00D0D" stroke-width="4" />
        <rect x="214.071" y="263.513" width="128.64" height="76.7375" rx="8" stroke="#C00D0D" stroke-width="4" />
      </svg>
      <svg
        class="tw-absolute tw-top-[40%] lg:-tw-top-[150px] -tw-right-[50px] lg:-tw-right-[150px] -tw-z-20 tw-w-[180px] lg:tw-w-[391px] tw-h-[180px] lg:tw-h-[391px] md:tw-hidden lg:tw-block"
        width="391" height="391" viewBox="0 0 391 391" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="195.5" cy="195.5" r="193.5" stroke="#C00D0D" stroke-width="4" stroke-dasharray="10 10" />
      </svg>
      <div
        class="tw-absolute -tw-top-[50px] md:-tw-top-[100px] lg:-tw-top-[20px] -tw-right-[110px] md:-tw-right-[220px] lg:-tw-right-[430px] -tw-z-10">
        <img class="tw-w-[200px] md:tw-w-[400px] lg:tw-w-[748px] tw-h-[200px] md:tw-h-[400px] lg:tw-h-[743px]"
          src="./img/red_square.png" alt="">
      </div>
    </div>
  </div>
</section>
<!-- -----end section----- -->
<!-- -----start section----- -->
<section class="tw-wrapper border-0">
  <div class="tw-wrap tw-pt-12.5">
    <h3 class="tw-mb-7.5 lg:tw-mb-12.5 tw-font-bold">Основные критерии отбора:</h3>
    <div
      class="tw-relative tw-flex tw-flex-col lg:tw-flex-row tw-gap-x-20 tw-gap-y-7.5 tw-py-13.5 md:tw-py-20 tw-px-7.5 md:tw-px-13.5 tw-p-20 tw-border tw-border-mec-red-300 tw-rounded-[25px] md:tw-rounded-[45px] tw-bg-white">
      <div class="tw-flex-1">
        <ul class="tw-list-disc">
          <li><span class="tw-text-black">Объем экспорта за 2022 г.</span></li>
          <li class="!tw-mt-7.5"><span class="tw-text-black">Количество стран, в которые осуществлялись экспортные
              поставки за 2022 г.</span></li>
          <li class="!tw-mt-7.5"><span class="tw-text-black">Количество позиций номенклатуры экспортной продукции за
              2022 г.</span></li>
        </ul>
      </div>
      <div class="tw-flex-1">
        <ul class="tw-list-disc">
          <li><span class="tw-text-black">Доля экспорта за 2022 г.</span></li>
          <li class="!tw-mt-7.5"><span class="tw-text-black">Участие в международных/российских выставках в 2022
              г.</span></li>
          <li class="!tw-mt-7.5"><span class="tw-text-black">Наличие действующих аккаунтов на международных
              электронных торговых площадках.</span></li>
        </ul>
      </div>
      <svg class="tw-absolute -tw-z-10 -tw-top-[100px] -tw-right-[100px] tw-hidden md:tw-block" width="292" height="292"
        viewBox="0 0 292 292" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="146" cy="146" r="145" stroke="#C00D0D" stroke-width="2" stroke-dasharray="8 8" />
      </svg>
      <svg class="tw-absolute -tw-z-10 tw-bottom-1/4 md:-tw-bottom-[100px] -tw-left-[150px]" width="317" height="307"
        viewBox="0 0 317 307" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M304.763 2.77094L312.672 1.13798L312.874 2.11732L315.132 1.65108L314.407 3.83991L315.356 4.15446L312.816 11.8202L311.866 11.5057L309.326 19.1714L310.275 19.486L307.735 27.1517L306.786 26.8372L304.246 34.5029L305.195 34.8175L302.655 42.4832L301.705 42.1687L299.165 49.8344L300.114 50.149L297.574 57.8148L296.625 57.5002L294.085 65.166L295.034 65.4805L292.494 73.1463L291.544 72.8317L289.004 80.4975L289.953 80.812L287.413 88.4778L286.464 88.1632L283.924 95.829L284.873 96.1435L282.333 103.809L281.383 103.495L278.843 111.16L279.792 111.475L277.252 119.141L276.303 118.826L273.763 126.492L274.712 126.807L272.172 134.472L271.222 134.158L268.682 141.824L269.631 142.138L267.091 149.804L266.142 149.489L263.602 157.155L264.551 157.47L262.011 165.135L261.061 164.821L258.521 172.487L259.47 172.801L256.93 180.467L255.981 180.152L253.441 187.818L254.39 188.133L251.85 195.798L250.9 195.484L248.36 203.15L249.309 203.464L246.769 211.13L245.82 210.815L243.28 218.481L244.229 218.796L241.689 226.461L240.739 226.147L238.199 233.813L239.148 234.127L236.608 241.793L235.659 241.478L233.119 249.144L234.068 249.459L231.528 257.124L230.579 256.81L228.038 264.476L228.987 264.79L226.447 272.456L225.498 272.141L222.958 279.807L223.907 280.122L221.367 287.787L220.418 287.473L217.877 295.139L218.827 295.453L216.286 303.119L215.337 302.804L214.612 304.993L213.079 303.271L212.332 303.935L206.963 297.903L207.71 297.238L202.342 291.205L201.595 291.87L196.226 285.837L196.973 285.172L191.604 279.139L190.857 279.804L185.489 273.771L186.236 273.107L180.867 267.074L180.12 267.739L174.751 261.706L175.498 261.041L170.13 255.008L169.383 255.673L164.014 249.64L164.761 248.975L159.393 242.943L158.646 243.607L153.277 237.575L154.024 236.91L148.655 230.877L147.908 231.542L142.54 225.509L143.287 224.844L137.918 218.811L137.171 219.476L131.803 213.443L132.55 212.779L127.181 206.746L126.434 207.411L121.065 201.378L121.812 200.713L116.444 194.68L115.697 195.345L110.328 189.312L111.075 188.648L105.706 182.615L104.959 183.279L99.5908 177.247L100.338 176.582L94.9692 170.549L94.2222 171.214L88.8536 165.181L89.6006 164.516L84.232 158.484L83.485 159.148L78.1163 153.116L78.8634 152.451L73.4948 146.418L72.7477 147.083L67.3791 141.05L68.1261 140.385L62.7575 134.352L62.0105 135.017L56.6419 128.984L57.3889 128.32L52.0203 122.287L51.2733 122.952L45.9046 116.919L46.6517 116.254L41.2831 110.221L40.536 110.886L35.1674 104.853L35.9144 104.188L30.5458 98.1556L29.7988 98.8203L24.4302 92.7875L25.1772 92.1228L19.8086 86.09L19.0616 86.7547L13.6929 80.722L14.44 80.0572L9.07135 74.0244L8.32431 74.6892L2.9557 68.6564L3.70273 67.9916L2.16987 66.2691L4.42811 65.8028L4.2259 64.8235L12.1348 63.1905L12.337 64.1698L20.2458 62.5369L20.0436 61.5575L27.9525 59.9246L28.1547 60.9039L36.0636 59.271L35.8614 58.2916L43.7702 56.6587L43.9724 57.638L51.8813 56.005L51.6791 55.0257L59.5879 53.3927L59.7902 54.3721L67.699 52.7391L67.4968 51.7598L75.4057 50.1268L75.6079 51.1062L83.5167 49.4732L83.3145 48.4938L91.2234 46.8609L91.4256 47.8402L99.3345 46.2073L99.1323 45.2279L107.041 43.595L107.243 44.5743L115.152 42.9414L114.95 41.962L122.859 40.329L123.061 41.3084L130.97 39.6754L130.768 38.6961L138.677 37.0631L138.879 38.0425L146.788 36.4095L146.585 35.4302L154.494 33.7972L154.696 34.7765L162.605 33.1436L162.403 32.1642L170.312 30.5313L170.514 31.5106L178.423 29.8777L178.221 28.8983L186.13 27.2654L186.332 28.2447L194.241 26.6117L194.039 25.6324L201.947 23.9994L202.15 24.9788L210.059 23.3458L209.856 22.3665L217.765 20.7335L217.967 21.7129L225.876 20.0799L225.674 19.1006L233.583 17.4676L233.785 18.4469L241.694 16.814L241.492 15.8346L249.401 14.2017L249.603 15.181L257.512 13.5481L257.31 12.5687L265.218 10.9357L265.421 11.9151L273.329 10.2821L273.127 9.30278L281.036 7.66983L281.238 8.64916L289.147 7.0162L288.945 6.03687L296.854 4.4039L297.056 5.38325L304.965 3.75029L304.763 2.77094Z"
          stroke="#C00D0D" stroke-width="2" stroke-dasharray="8 8" />
      </svg>

    </div>
  </div>
</section>
<!-- -----end section----- -->

<section class="tw-wrapper" id="form-land">
  <div class="tw-wrap">
    <div class="container">
      <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "exporter_year_form", array(
        "AJAX_MODE" => "Y", "AJAX_OPTION_HISTORY" => "N", "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_SHADOW" => "N", "AJAX_OPTION_STYLE" => "Y", "CACHE_TIME" => "3600", "CACHE_TYPE" => "A", "CHAIN_ITEM_LINK" => "", "CHAIN_ITEM_TEXT" => "", "COMPONENT_TEMPLATE" =>
        "exporter_year_form", "EDIT_URL" => "", "IGNORE_CUSTOM_TEMPLATE" => "N", "LIST_URL" => "", "SEF_MODE" => "N", "SUCCESS_URL" => "", "USE_CAPTCHA" => "N", "USE_EXTENDED_ERRORS" => "Y",
        "VARIABLE_ALIASES" => array("WEB_FORM_ID" => "WEB_FORM_ID", "RESULT_ID" => "RESULT_ID",), "WEB_FORM_ID" => "137"
      )); ?>
    </div>
  </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>