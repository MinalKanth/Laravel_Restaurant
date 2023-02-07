<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')


        <div class="main-body">
            <div class="page-wrapper">
            <div class="page-body">
            <div class="row">

            <div class="col-xl-3 col-md-6">
            <div class="card bg-c-yellow update-card">
            <div class="card-block">
            <div class="row align-items-end">
            <div class="col-8">
            <h4 class="text-white">$30200</h4>
            <h6 class="text-white m-b-0">All Earnings</h6>
            </div>
            <div class="col-4 text-right"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="update-chart-1" height="50" style="display: block; width: 65px; height: 50px;" width="65" class="chartjs-render-monitor"></canvas>
            </div>
            </div>
            </div>
            <div class="card-footer">
            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update
            : 2:15 am</p>
            </div>
             </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card bg-c-green update-card">
            <div class="card-block">
            <div class="row align-items-end">
            <div class="col-8">
            <h4 class="text-white">290+</h4>
            <h6 class="text-white m-b-0">Page Views</h6>
            </div>
            <div class="col-4 text-right"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="update-chart-2" height="50" width="65" style="display: block; width: 65px; height: 50px;" class="chartjs-render-monitor"></canvas>
            </div>
            </div>
            </div>
            <div class="card-footer">
            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update
            : 2:15 am</p>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card bg-c-pink update-card">
            <div class="card-block">
            <div class="row align-items-end">
            <div class="col-8">
            <h4 class="text-white">145</h4>
            <h6 class="text-white m-b-0">Task Completed</h6>
            </div>
            <div class="col-4 text-right"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="update-chart-3" height="50" width="65" style="display: block; width: 65px; height: 50px;" class="chartjs-render-monitor"></canvas>
            </div>
            </div>
            </div>
            <div class="card-footer">
            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update
            : 2:15 am</p>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card bg-c-lite-green update-card">
            <div class="card-block">
            <div class="row align-items-end">
            <div class="col-8">
            <h4 class="text-white">500</h4>
            <h6 class="text-white m-b-0">Downloads</h6>
            </div>
            <div class="col-4 text-right"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="update-chart-4" height="50" width="65" style="display: block; width: 65px; height: 50px;" class="chartjs-render-monitor"></canvas>
            </div>
            </div>
            </div>
            <div class="card-footer">
            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update
            : 2:15 am</p>
            </div>
            </div>
            </div>


            <div class="col-xl-9 col-md-12">
            <div class="card">
            <div class="card-header">
            <h5>Sales Analytics</h5>
            <span class="text-muted">For more details about usage, please
            refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li><i class="feather icon-maximize full-card"></i></li>
            <li><i class="feather icon-minus minimize-card"></i>
            </li>
            <li><i class="feather icon-trash-2 close-card"></i></li>
            </ul>
            </div>
            </div>
            <div class="card-block">
            <div id="sales-analytics" style="height: 265px; overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 902px; height: 265px; padding: 0px; cursor: default; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 902px; height: 265px; top: -0.109375px; left: -0.203125px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L901.5,0.5 L901.5,264.5 L0.5,264.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L851.5,0.5 L851.5,179.5 L0.5,179.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(50,55)"></path></g><g><g transform="translate(50,0)" visibility="hidden"></g><g transform="translate(50,55)"><g><path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M85.5,0.5 L85.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M170.5,0.5 L170.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M255.5,0.5 L255.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M340.5,0.5 L340.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M426.5,0.5 L426.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M511.5,0.5 L511.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M596.5,0.5 L596.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M681.5,0.5 L681.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M766.5,0.5 L766.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g><g><path cs="100,100" d="M851.5,0.5 L851.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path></g></g><g transform="translate(50,55)" visibility="visible"></g></g><g transform="translate(50,55)" clip-path="url(#AmChartsEl-3)"><g visibility="hidden"><g transform="translate(214,0)" visibility="hidden"><rect x="0.5" y="0.5" width="85" height="179" rx="0" ry="0" stroke-width="0" fill="#000000" stroke="#000000" fill-opacity="0" stroke-opacity="0" transform="translate(-44,0)"></rect></g></g></g><g></g><g></g><g></g><g><g transform="translate(50,55)"><g clip-path="url(#AmChartsEl-9)"><path cs="100,100" d="M-42,140 C-21,137,1,96,43,92 C86,87,86,41,128,44 C171,47,171,143,213,148 C256,152,256,132,298,132 C341,133,341,166,383,163 C426,159,426,68,468,65 C511,61,511,95,553,94 C596,94,596,56,638,54 C681,51,680,45,723,44 C766,43,766,27,809,29 C852,30,852,69,894,68 C937,67,937,8,979,8 C1022,9,1043,76,1064,79 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="0.9" stroke="#fe9365"></path></g><g clip-path="url(#AmChartsEl-8)"><path cs="100,100" d="M-42,140 C-21,137,1,96,43,92 C86,87,86,41,128,44 C171,47,171,143,213,148 C256,152,256,132,298,132 C341,133,341,166,383,163 C426,159,426,68,468,65 C511,61,511,95,553,94 C596,94,596,56,638,54 C681,51,680,45,723,44 C766,43,766,27,809,29 C852,30,852,69,894,68 C937,67,937,8,979,8 C1022,9,1043,76,1064,79 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="0.9" stroke="#fe5d70"></path></g><clipPath id="AmChartsEl-8"><rect x="0" y="0" width="851" height="72" rx="0" ry="0" stroke-width="0"></rect></clipPath><clipPath id="AmChartsEl-9"><rect x="0" y="72" width="851" height="107" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g></g><g></g><g><path cs="100,100" d="M0.5,72.5 L851.5,72.5 L851.5,72.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,55)"></path><path cs="100,100" d="M0.5,37.5 L852.5,37.5 L852.5,37.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,0)"></path><g><path cs="100,100" d="M0.5,0.5 L851.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,55)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,55.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,0)" visibility="hidden"></path></g><g><path cs="100,100" d="M0.5,0.5 L851.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(50,234)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,179.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,55)" visibility="visible"></path></g></g><g><g transform="translate(50,55)" clip-path="url(#AmChartsEl-4)" style="pointer-events: none;"><path cs="100,100" d="M0.5,0.5 L851.5,0.5 L851.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.5" stroke="#000000" visibility="hidden" transform="translate(0,4)"></path></g><clipPath id="AmChartsEl-4"><rect x="0" y="0" width="851" height="179" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g><g visibility="visible" transform="translate(50,0)" style="touch-action: none;"><rect x="0.5" y="0.5" width="852" height="55" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="0" stroke-opacity="0"></rect><rect x="0.5" y="0.5" width="152" height="56" rx="0" ry="0" stroke-width="0" fill="#888888" stroke="#888888" fill-opacity="0.1" stroke-opacity="0.1" transform="translate(334,0)"></rect><g transform="translate(0,0)"><g></g><g><path cs="100,100" d="M8,48 C12,48,16,43,23,43 C31,42,31,40,38,39 C46,39,46,37,53,38 C61,38,60,45,68,46 C76,46,76,47,84,47 C92,47,92,50,99,49 C107,49,107,40,114,39 C122,39,122,37,129,37 C137,37,136,39,144,39 C152,40,152,41,160,41 C168,41,168,38,175,38 C183,37,183,38,190,37 C198,37,198,36,205,37 C213,37,212,47,220,48 C228,48,228,45,236,45 C244,44,244,42,251,42 C259,42,259,42,266,42 C274,42,274,43,281,43 C289,42,288,37,296,37 C304,37,304,39,312,39 C320,39,320,44,327,44 C335,44,335,39,342,39 C350,38,350,34,357,34 C365,34,364,44,372,44 C380,45,380,43,388,43 C396,43,396,46,403,46 C411,46,411,36,418,36 C426,36,426,39,433,39 C441,39,441,35,448,35 C456,35,455,34,463,34 C471,34,471,32,479,32 C487,32,487,36,494,36 C502,36,502,30,509,30 C517,30,517,37,524,37 C532,38,531,38,539,38 C547,38,547,36,555,36 C563,35,563,30,570,30 C578,30,578,30,585,30 C593,30,593,33,600,33 C608,33,607,28,615,27 C623,27,623,29,631,29 C639,29,639,34,646,34 C654,34,654,33,661,33 C669,32,669,31,676,30 C684,30,683,27,691,27 C699,27,699,32,707,31 C715,31,715,24,722,24 C730,23,730,16,737,17 C745,17,745,25,752,26 C760,26,759,27,767,27 C775,27,775,22,783,22 C791,21,791,20,798,20 C806,20,806,19,813,19 C821,19,821,20,828,20 C836,20,839,19,843,19 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="0.2" stroke="#c2c2c2"></path></g><g></g></g><g transform="translate(0,0)" clip-path="url(#AmChartsEl-10)"><g></g><g><path cs="100,100" d="M8,48 C12,48,16,43,23,43 C31,42,31,40,38,39 C46,39,46,37,53,38 C61,38,60,45,68,46 C76,46,76,47,84,47 C92,47,92,50,99,49 C107,49,107,40,114,39 C122,39,122,37,129,37 C137,37,136,39,144,39 C152,40,152,41,160,41 C168,41,168,38,175,38 C183,37,183,38,190,37 C198,37,198,36,205,37 C213,37,212,47,220,48 C228,48,228,45,236,45 C244,44,244,42,251,42 C259,42,259,42,266,42 C274,42,274,43,281,43 C289,42,288,37,296,37 C304,37,304,39,312,39 C320,39,320,44,327,44 C335,44,335,39,342,39 C350,38,350,34,357,34 C365,34,364,44,372,44 C380,45,380,43,388,43 C396,43,396,46,403,46 C411,46,411,36,418,36 C426,36,426,39,433,39 C441,39,441,35,448,35 C456,35,455,34,463,34 C471,34,471,32,479,32 C487,32,487,36,494,36 C502,36,502,30,509,30 C517,30,517,37,524,37 C532,38,531,38,539,38 C547,38,547,36,555,36 C563,35,563,30,570,30 C578,30,578,30,585,30 C593,30,593,33,600,33 C608,33,607,28,615,27 C623,27,623,29,631,29 C639,29,639,34,646,34 C654,34,654,33,661,33 C669,32,669,31,676,30 C684,30,683,27,691,27 C699,27,699,32,707,31 C715,31,715,24,722,24 C730,23,730,16,737,17 C745,17,745,25,752,26 C760,26,759,27,767,27 C775,27,775,22,783,22 C791,21,791,20,798,20 C806,20,806,19,813,19 C821,19,821,20,828,20 C836,20,839,19,843,19 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="1" stroke="#888888"></path></g><g></g></g><g transform="translate(0,0)"></g><g transform="translate(0,0)" visibility="visible"><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(3,43.5)"><tspan y="6" x="0">1950</tspan></text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(155,43.5)"><tspan y="6" x="0">1960</tspan></text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(307,43.5)"><tspan y="6" x="0">1970</tspan></text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(459,43.5)"><tspan y="6" x="0">1980</tspan></text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(611,43.5)"><tspan y="6" x="0">1990</tspan></text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(763,43.5)"><tspan y="6" x="0">2000</tspan></text></g><rect x="0.5" y="0.5" width="852" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005"></rect><rect x="334" y="0.5" width="152" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" aria-label="Zoom chart using cursor arrows" role="menuitem"></rect><g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(317,10)" visibility="visible"><image x="0" y="0" width="35" height="35" xlink:href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/widget/amchart/images/dragIconRoundBig.svg"></image><rect x="0.5" y="0.5" width="25" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-10)"></rect></g><g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(469,10)" visibility="visible"><image x="0" y="0" width="35" height="35" xlink:href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/widget/amchart/images/dragIconRoundBig.svg"></image><rect x="0.5" y="0.5" width="25" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-10)"></rect></g><clipPath id="AmChartsEl-10"><rect x="334" y="0" width="152" height="56" rx="0" ry="0" stroke-width="0"></rect></clipPath></g></g><g><g transform="translate(0,0)"></g><g transform="translate(0,0)"></g><g transform="translate(50,55)"><circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(43,92)" aria-label=" 1972 -0.056"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(128,44)" aria-label=" 1973 0.077"></circle><circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(213,148) scale(1)" aria-label=" 1974 -0.213"></circle><circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(298,132) scale(1)" aria-label=" 1975 -0.17"></circle><circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(383,163)" aria-label=" 1976 -0.254"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(468,65)" aria-label=" 1977 0.019"></circle><circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(553,94)" aria-label=" 1978 -0.063"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(638,54)" aria-label=" 1979 0.05"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(723,44)" aria-label=" 1980 0.077"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(809,29)" aria-label=" 1981 0.12"></circle></g></g><g><g></g></g><g><g transform="translate(50,0)" visibility="hidden"></g><g transform="translate(50,55)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(42.631535724197484,191.5)"><tspan y="6" x="0">1972</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(127.63153572419748,191.5)"><tspan y="6" x="0">1973</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(212.63153572419748,191.5)"><tspan y="6" x="0">1974</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(297.6315357241975,191.5)"><tspan y="6" x="0">1975</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(382.6315357241975,191.5)"><tspan y="6" x="0">1976</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(468.6315357241975,191.5)"><tspan y="6" x="0">1977</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(553.6315357241975,191.5)"><tspan y="6" x="0">1978</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(638.6315357241975,191.5)"><tspan y="6" x="0">1979</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(723.6315357241975,191.5)"><tspan y="6" x="0">1980</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(808.6315357241975,191.5)"><tspan y="6" x="0">1981</tspan></text></g><g transform="translate(50,55)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,178)"><tspan y="6" x="0">-0.3</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,142)"><tspan y="6" x="0">-0.2</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,106)"><tspan y="6" x="0">-0.1</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,71)"><tspan y="6" x="0">0.0</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,35)"><tspan y="6" x="0">0.1</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)"><tspan y="6" x="0">0.2</tspan></text></g></g><g></g><g transform="translate(50,55)"></g><g><g transform="translate(818,63)" visibility="visible"><rect x="0.5" y="0.5" width="92" height="33" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="1" stroke-opacity="1" opacity="0" transform="translate(-8,-8)"></rect><image x="0" y="0" width="19" height="19" xlink:href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/widget/amchart/images/lens.svg"></image><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(24,7)"><tspan y="6" x="0">Show all</tspan></text></g></g><g></g><clipPath id="AmChartsEl-3"><rect x="-1" y="-1" width="853" height="181" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 55px; top: 60px;">JS chart by amCharts</a></div></div></div>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-12">
            <div class="card user-card2">
            <div class="card-block text-center">
            <h6 class="m-b-15">Project Risk</h6>
            <div class="risk-rate">
            <span><b>5</b></span>
            </div>
            <h6 class="m-b-10 m-t-10">Balanced</h6>
            <a href="#!" class="text-c-yellow b-b-warning">Change Your
            Risk</a>
            <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
            <div class="col m-t-15 b-r-default">
            <h6 class="text-muted">Nr</h6>
            <h6>AWS 2455</h6>
            </div>
            <div class="col m-t-15">
            <h6 class="text-muted">Created</h6>
            <h6>30th Sep</h6>
            </div>
            </div>
            </div>
            <button class="btn btn-warning btn-block p-t-15 p-b-15">Download
            Overall Report</button>
            </div>
            </div>

            <div class="col-xl-8 col-md-12">
            <div class="card table-card">
            <div class="card-header">
            <h5>Application Sales</h5>
            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li><i class="feather icon-maximize full-card"></i></li>
            <li><i class="feather icon-minus minimize-card"></i>
            </li>
            <li><i class="feather icon-trash-2 close-card"></i></li>
            </ul>
            </div>
            </div>
            <div class="card-block">
            <div class="table-responsive">
            <table class="table table-hover  table-borderless">
            <thead>
            <tr>
            <th>
            <div class="chk-option">
            <div class="checkbox-fade fade-in-primary">
            <label class="check-task">
            <input type="checkbox" value="">
            <span class="cr">
            <i class="cr-icon feather icon-check txt-default"></i>
            </span>
            </label>
            </div>
            </div>
            Application
            </th>
             <th>Sales</th>
            <th>Change</th>
            <th>Avg Price</th>
            <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <div class="chk-option">
            <div class="checkbox-fade fade-in-primary">
            <label class="check-task">
            <input type="checkbox" value="">
            <span class="cr">
            <i class="cr-icon feather icon-check txt-default"></i>
            </span>
            </label>
            </div>
            </div>
            <div class="d-inline-block align-middle">
            <h6>Able Pro</h6>
            <p class="text-muted m-b-0">Powerful
            Admin Theme</p>
            </div>
            </td>
            <td>16,300</td>
            <td><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="app-sale1" height="77" width="154" class="chartjs-render-monitor" style="display: block; width: 154px; height: 77px;"></canvas></td>
            <td>$53</td>
            <td class="text-c-blue">$15,652</td>
            </tr>
            <tr>
            <td>
            <div class="chk-option">
            <div class="checkbox-fade fade-in-primary">
            <label class="check-task">
            <input type="checkbox" value="">
            <span class="cr">
            <i class="cr-icon feather icon-check txt-default"></i>
            </span>
            </label>
            </div>
            </div>
            <div class="d-inline-block align-middle">
            <h6>Photoshop</h6>
            <p class="text-muted m-b-0">Design
            Software</p>
            </div>
            </td>
            <td>26,421</td>
            <td><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="app-sale2" height="77" width="154" class="chartjs-render-monitor" style="display: block; width: 154px; height: 77px;"></canvas></td>
            <td>$35</td>
            <td class="text-c-blue">$18,785</td>
            </tr>
            <tr>
            <td>
            <div class="chk-option">
            <div class="checkbox-fade fade-in-primary">
            <label class="check-task">
            <input type="checkbox" value="">
            <span class="cr">
            <i class="cr-icon feather icon-check txt-default"></i>
            </span>
            </label>
            </div>
            </div>
            <div class="d-inline-block align-middle">
            <h6>Guruable</h6>
            <p class="text-muted m-b-0">Best Admin
            Template</p>
            </div>
            </td>
            <td>8,265</td>
            <td><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="app-sale3" height="77" width="154" class="chartjs-render-monitor" style="display: block; width: 154px; height: 77px;"></canvas></td>
            <td>$98</td>
             <td class="text-c-blue">$9,652</td>
            </tr>
            <tr>
            <td>
            <div class="chk-option">
            <div class="checkbox-fade fade-in-primary">
            <label class="check-task">
            <input type="checkbox" value="">
            <span class="cr">
            <i class="cr-icon feather icon-check txt-default"></i>
            </span>
            </label>
            </div>
            </div>
            <div class="d-inline-block align-middle">
            <h6>Flatable</h6>
            <p class="text-muted m-b-0">Admin App
            </p>
            </div>
            </td>
            <td>10,652</td>
            <td><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="app-sale4" height="77" width="154" class="chartjs-render-monitor" style="display: block; width: 154px; height: 77px;"></canvas></td>
            <td>$20</td>
            <td class="text-c-blue">$7,856</td>
            </tr>
            </tbody>
            </table>
            <div class="text-center">
            <a href="#!" class=" b-b-primary text-primary">View all
            Projects</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-md-12">
            <div class="card user-activity-card">
            <div class="card-header">
            <h5>User Activity</h5>
            </div>
            <div class="card-block">
            <div class="row m-b-25">
            <div class="col-auto p-r-0">
             <div class="u-img">
            <img src="./files/assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
            <img src="./files/assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
            </div>
            </div>
            <div class="col">
            <h6 class="m-b-5">John Deo</h6>
            <p class="text-muted m-b-0">Lorem Ipsum is simply dummy
            text.</p>
            <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago
            </p>
            </div>
            </div>
            <div class="row m-b-25">
            <div class="col-auto p-r-0">
            <div class="u-img">
            <img src="./files/assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
            <img src="./files/assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
            </div>
            </div>
            <div class="col">
            <h6 class="m-b-5">John Deo</h6>
            <p class="text-muted m-b-0">Lorem Ipsum is simply dummy
            text.</p>
            <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago
            </p>
            </div>
            </div>
            <div class="row m-b-25">
            <div class="col-auto p-r-0">
            <div class="u-img">
            <img src="./files/assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
            <img src="./files/assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
            </div>
            </div>
            <div class="col">
             <h6 class="m-b-5">John Deo</h6>
            <p class="text-muted m-b-0">Lorem Ipsum is simply dummy
            text.</p>
            <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago
            </p>
            </div>
            </div>
            <div class="row m-b-5">
            <div class="col-auto p-r-0">
            <div class="u-img">
            <img src="./files/assets/images/breadcrumb-bg.jpg" alt="user image" class="img-radius cover-img">
            <img src="./files/assets/images/avatar-2.jpg" alt="user image" class="img-radius profile-img">
            </div>
            </div>
            <div class="col">
            <h6 class="m-b-5">John Deo</h6>
            <p class="text-muted m-b-0">Lorem Ipsum is simply dummy
            text.</p>
            <p class="text-muted m-b-0"><i class="feather icon-clock m-r-10"></i>2 min ago
            </p>
            </div>
            </div>
            <div class="text-center">
            <a href="#!" class="b-b-primary text-primary">View all
            Projects</a>
            </div>
            </div>
            </div>
            </div>

            <div class="col-xl-6 col-md-12">
            <div class="card latest-update-card">
            <div class="card-header">
            <h5>Latest Updates</h5>
            <div class="card-header-right">
            <ul class="list-unstyled card-option">
            <li><i class="fa fa fa-wrench open-card-option"></i>
            </li>
            <li><i class="fa fa-window-maximize full-card"></i></li>
            <li><i class="fa fa-minus minimize-card"></i></li>
            <li><i class="fa fa-refresh reload-card"></i></li>
            <li><i class="fa fa-trash close-card"></i></li>
            </ul>
            </div>
            </div>
            <div class="card-block">
            <div class="latest-update-box">
            <div class="row p-b-15">
            <div class="col-auto text-right update-meta">
            <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
            <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
            </div>
            <div class="col">
            <h6>+ 5 New Products were added!</h6>
            <p class="text-muted m-b-0">Congratulations!</p>
            </div>
            </div>
            <div class="row p-b-15">
            <div class="col-auto text-right update-meta">
            <p class="text-muted m-b-0 d-inline">1 day ago</p>
            <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
            </div>
            <div class="col">
            <h6>Database backup completed!</h6>
            <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.
            </p>
            </div>
            </div>
            <div class="row p-b-0">
            <div class="col-auto text-right update-meta">
            <p class="text-muted m-b-0 d-inline">2 day ago</p>
            <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
            </div>
            <div class="col">
            <h6>+1 Friend Requests</h6>
            <p class="text-muted m-b-10">This is great, keep it
            up!</p>
            <div class="table-responsive">
            <table class="table table-hover m-b-0">
            <tbody>
            <tr>
             <td class="b-none">
            <a href="#!" class="align-middle">
            <img src="./files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
            <div class="d-inline-block">
            <h6>Jeny William</h6>
            <p class="text-muted m-b-0">
            Graphic Designer</p>
            </div>
            </a>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            <div class="text-center">
            <a href="#!" class="b-b-primary text-primary">View all
            Projects</a>
            </div>
            </div>
            </div>
            </div>
            <div class="col-xl-6 col-md-12">
            <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-green user-profile">
            <div class="card-block text-center text-white">
            <div class="m-b-25">
            <img src="./files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
            </div>
            <h6 class="f-w-600">Jeny William</h6>
            <p>Web Designer</p>
            <i class="feather icon-edit m-t-10 f-16"></i>
            </div>
            </div>
            <div class="col-sm-8">
            <div class="card-block">
            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information
            </h6>
            <div class="row">
            <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Email</p>
            <h6 class="text-muted f-w-400">jeny@gmail.com
            </h6>
            </div>
            <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Phone</p>
            <h6 class="text-muted f-w-400">0023-333-526136
            </h6>
            </div>
            </div>
            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">
            Projects</h6>
            <div class="row">
            <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Recent</p>
            <h6 class="text-muted f-w-400">Guruable Admin
            </h6>
            </div>
            <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Most Viewed</p>
            <h6 class="text-muted f-w-400">Able Pro Admin
            </h6>
            </div>
            </div>
            <ul class="social-link list-unstyled m-t-40 m-b-10">
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
            </ul>
            </div>
            </div>
            </div>
            </div>
            </div>


            <div class="col-xl-4 col-md-6">
            <div class="card social-card bg-simple-c-blue">
            <div class="card-block">
            <div class="row align-items-center">
            <div class="col-auto">
            <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
            </div>
            <div class="col">
            <h6 class="m-b-0">Mail</h6>
            <p>231.2w downloads</p>
            <p class="m-b-0">Lorem Ipsum is simply dummy text of the
            printing</p>
            </div>
            </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
            </div>
            <div class="col-xl-4 col-md-6">
            <div class="card social-card bg-simple-c-pink">
            <div class="card-block">
            <div class="row align-items-center">
            <div class="col-auto">
            <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
            </div>
            <div class="col">
            <h6 class="m-b-0">twitter</h6>
            <p>231.2w downloads</p>
            <p class="m-b-0">Lorem Ipsum is simply dummy text of the
            printing</p>
            </div>
            </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
            </div>
             <div class="col-xl-4 col-md-12">
            <div class="card social-card bg-simple-c-green">
            <div class="card-block">
            <div class="row align-items-center">
            <div class="col-auto">
            <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
            </div>
            <div class="col">
            <h6 class="m-b-0">Instagram</h6>
            <p>231.2w downloads</p>
            <p class="m-b-0">Lorem Ipsum is simply dummy text of the
            printing</p>
            </div>
            </div>
            </div>
            <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
            </div>

            </div>
            </div>
            </div>
            <div id="styleSelector">
            <div class="selector-toggle"><a href="javascript:void(0)"></a></div><ul><li><p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p><span class="text-muted">Live customizer with tons of options</span></li><li><p class="selector-title">Main layouts</p></li><li><div class="theme-color"><a href="#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a><a href="#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a></div></li></ul><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);"><div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);"><ul class="nav nav-tabs  tabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-layout" role="tab">Layouts</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-sidebar-setting" role="tab">Sidebar Settings</a></li></ul><div class="tab-content tabs"><div class="tab-pane active" id="sel-layout" role="tabpanel"><ul><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span></label></div></li><li class="theme-option"><div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="header-position" name="header-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span></label></div></li></ul></div><div class="tab-pane" id="sel-sidebar-setting" role="tabpanel"><ul><li class="theme-option"><p class="sub-title drp-title">Menu Type</p><div class="form-radio" id="menu-effect"><div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon"><label><input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true"><i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span></label></div><div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon"><label><input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)"><i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span></label></div></div></li><li class="theme-option"><p class="sub-title drp-title">SideBar Effect</p><select id="vertical-menu-effect" class="form-control minimal"><option name="vertical-menu-effect" value="shrink">shrink</option><option name="vertical-menu-effect" value="overlay">overlay</option><option name="vertical-menu-effect" value="push">Push</option></select></li><li class="theme-option"><p class="sub-title drp-title">Hide/Show Border</p><select id="vertical-border-style" class="form-control minimal"><option name="vertical-border-style" value="solid">Style 1</option><option name="vertical-border-style" value="dotted">Style 2</option><option name="vertical-border-style" value="dashed">Style 3</option><option name="vertical-border-style" value="none">No Border</option></select></li><li class="theme-option"><p class="sub-title drp-title">Drop-Down Icon</p><select id="vertical-dropdown-icon" class="form-control minimal"><option name="vertical-dropdown-icon" value="style1">Style 1</option><option name="vertical-dropdown-icon" value="style2">style 2</option><option name="vertical-dropdown-icon" value="style3">style 3</option></select></li><li class="theme-option"><p class="sub-title drp-title">Sub Menu Drop-down Icon</p><select id="vertical-subitem-icon" class="form-control minimal"><option name="vertical-subitem-icon" value="style1">Style 1</option><option name="vertical-subitem-icon" value="style2">style 2</option><option name="vertical-subitem-icon" value="style3">style 3</option><option name="vertical-subitem-icon" value="style4">style 4</option><option name="vertical-subitem-icon" value="style5">style 5</option><option name="vertical-subitem-icon" value="style6">style 6</option></select></li></ul></div><ul><li><p class="selector-title">Header Brand color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Header color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a><a href="#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a></div></li><li><p class="selector-title">Active link color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a><a href="#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a></div></li><li><p class="selector-title">Menu Caption Color</p></li><li class="theme-option"><div class="theme-color"><a href="#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a><a href="#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a></div></li></ul></div></div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 122.858px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div><ul><li><a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a></li><li class="text-center"><span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span><a href="#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a><a href="#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a></li></ul></div>
            </div>


    </div>
    @include('admin.adminscript')


</body>

</html>
