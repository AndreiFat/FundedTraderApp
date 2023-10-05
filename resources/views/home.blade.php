@extends('layouts.app')

@section('content')
    <div id="vue-app">
        <div class="container">
            <div class="row my-4 justify-content-center">
                <div class="col-md-5 px-2 d-flex flex-column">
                    {{--                <div class="card">--}}
                    {{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

                    {{--                    <div class="card-body">--}}
                    {{--                        @if (session('status'))--}}
                    {{--                            <div class="alert alert-success" role="alert">--}}
                    {{--                                {{ session('status') }}--}}
                    {{--                            </div>--}}
                    {{--                        @endif--}}

                    {{--                        {{ __('You are logged in!') }}--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <div class="card mb-3 p-0 p-sm-2 flex-fill">
                        <div class="card-body">
                            <h2 class="mb-1">Account Limits</h2>
                            <p class="fs-6 text-muted mb-1">Input Daily or Account Loss Limit</p>
                            <form action="" class="prevent-submit" id="loss-limit-form">
                                <div class="mb-3">
                                    <label for="loss-limit" class="fs-5 form-label">Loss Limit</label>
                                    <div class="position-relative">
                                        <input type="text"
                                               class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                               id="loss-limit"
                                               aria-describedby="lossHelp"
                                               placeholder="0.00"
                                               oninput="formatWithCommas(this)"
                                               :value="loss_limit"
                                               @input="handleLoss_Limit"

                                        >
                                        <span class="currency-suffix">USD</span>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Max consecutive losers to loss limit</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(max_loses_limit)}</p>
                            </div>
                            <div class="d-flex">
                                <p class="mb-0 fs-5">Rolling Loss Limit</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(rolling_loss_limit)} USD</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 p-sm-2 flex-fill">
                        <div class="card-body">
                            <h2 class="mb-2">MY PARAMETERS</h2>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Position Size</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(position_size)}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Tick / Pip Value</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(tick_pip_value_show)}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Stop Loss</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(stop_loss_value)}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Take Profit</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(take_profit)}</p>
                            </div>
                            <div class="d-flex mb-2 ">
                                <p class="my-auto fs-5">Loss Per Trade</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-danger py-2 px-3 rounded-3">
                                    {(loss_per_trade)}
                                    USD</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="my-auto fs-5">Profit Per Trade</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-success py-2 px-3 rounded-3">
                                    {(profit_per_trade)}
                                    USD</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Total Trades</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(number_of_trades)}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="mb-0 fs-5">Total Commissions</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(total_commissions)}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <p class="my-auto fs-5 text-uppercase fw-bold">Net Profit/Loss</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-success py-2 px-3 rounded-3">
                                    {(net_profit_loss)}
                                    USD</p>
                            </div>
                            <div class="d-flex">
                                <p class="mb-0 fs-5">R:R</p>
                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(R)}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 pt-3 pt-md-0 px-2 d-flex flex-column">
                    <div class="card p-0 p-sm-2 mb-3 flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h2 class="mb-4">Trades</h2>
                                </div>
                                <div class="col-6">
                                    <h2 class="mb-4">Totals</h2>
                                </div>
                            </div>
                            <form action="" class="prevent-submit" id="trades">
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label for="loss-limit" class="fs-5 form-label">Quantity</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="quantity"
                                                       @input="handleQuantity"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label for="loss-limit" class="fs-5 form-label">Stop Loss (Ticks /
                                                Pips)</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="stop_loss"
                                                       @input="handleStop_Loss"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label for="loss-limit" class="fs-5 form-label">Tick / Pip Value</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="tick_pip_value"
                                                       @input="handleTick_Pip_Value"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-4">
                                            <label for="loss-limit" class="fs-5 form-label">Profit Target (Ticks /
                                                Pips)</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="profit_target"
                                                       @input="handleProfit_Target"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card p-0 p-sm-2 flex-fill">
                        <div class="card-body">
                            <form action="" class="prevent-submit" id="trades">
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="loss-limit" class="fs-5 form-label">Wins</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="wins"
                                                       @input="handleWins"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-success py-15 px-3 rounded-3">
                                                    {(wins_value)} </p>
                                                <span class="currency-suffix-green">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="loss-limit" class="fs-5 form-label">Loses</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="loses"
                                                       @input="handleLoses"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-danger py-15 px-3 rounded-3">
                                                    {(loses_value)} </p>
                                                <span class="currency-suffix-red">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex mb-3">
                                            <p class="mb-0 fs-5">Win Rate</p>
                                            <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(win_rate)}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex mb-3">
                                            <p class="mb-0 fs-5"># of Trades</p>
                                            <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(number_of_trades)}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="">
                                            <label for="loss-limit" class="fs-5 form-label">Commissions</label>
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="fs-5 fw-medium text-secondary bg-secondary form-control"
                                                       id="loss-limit"
                                                       aria-describedby="lossHelp"
                                                       placeholder="0.00"
                                                       oninput="formatWithCommas(this)"
                                                       :value="commissions"
                                                       @input="handleCommissions"
                                                >
                                                <span class="currency-suffix">USD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="loss-limit" class="fs-5 fw-bold form-label text-uppercase">Net
                                                Profit /
                                                Loss</label>

                                            <div class="position-relative">
                                                <p class="fs-5 mb-0 fw-semibold d-block ms-auto bg-success py-15 px-3 rounded-3">
                                                    {(net_profit_loss)} </p>
                                                <span class="currency-suffix-green">USD</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex">
                                            <p class="mb-0 fs-5">R:R</p>
                                            <p class="fs-5 mb-0 fw-semibold d-block ms-auto">{(R)}</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

        @push('vue-app')
            <script>
                function formatWithCommas(input) {
                    // Remove non-numeric characters and leading zeros
                    let value = input.value.replace(/[^\d]/g, '').replace(/^0+/, '');

                    // Format the value with commas
                    value = Number(value).toLocaleString();

                    // Update the input value
                    input.value = value;
                }

                // Prevent form submission when Enter key is pressed in the input field
                document.querySelectorAll('.prevent-submit').forEach(function (form) {
                    form.addEventListener('submit', function (e) {
                        e.preventDefault();
                    });
                });
            </script>
            <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
            <script>
                const {createApp} = Vue
                createApp({
                    data() {
                        return {
                            loss_limit: 0.00,

                            quantity: 0.00,
                            stop_loss: 0.00,
                            tick_pip_value: 0.00,
                            profit_target: 0.00,

                            wins: 0,
                            loses: 0,
                            commissions: 0,

                            //Accounts Limits
                            max_loses_limit: 0,
                            rolling_loss_limit: 0,

                            //My Parameters
                            position_size: 0,
                            tick_pip_value_show: 0,
                            stop_loss_value: 0,
                            take_profit: 0,
                            loss_per_trade: 0,
                            profit_per_trade: 0,
                            total_trades: 0,
                            total_commissions: 0,
                            net_profit_loss: 0,
                            R: 0,

                            // Trades
                            win_rate: 0,
                            number_of_trades: 0,

                            // Totals
                            wins_value: 0,
                            loses_value: 0,
                        }
                    },
                    methods: {
                        handleLoss_Limit(event) {
                            this.loss_limit = event.target.value;
                            // console.log(this.loss_limit)
                        },
                        handleQuantity(event) {
                            this.quantity = event.target.value
                            this.position_size = this.quantity
                            // console.log(this.quantity)
                        },
                        handleStop_Loss(event) {
                            this.stop_loss = event.target.value
                            this.stop_loss_value = this.stop_loss
                            // console.log(this.stop_loss)
                        },
                        handleTick_Pip_Value(event) {
                            this.tick_pip_value = event.target.value
                            this.tick_pip_value_show = this.tick_pip_value
                            //console.log(this.tick_pip_value)
                        },
                        handleProfit_Target(event) {
                            this.profit_target = event.target.value
                            this.take_profit = this.profit_target
                            // console.log(this.profit_target)
                        },
                        handleWins(event) {
                            this.wins = event.target.value
                            //console.log(this.wins)
                        },
                        handleLoses(event) {
                            this.loses = event.target.value
                            //console.log(this.loses)
                        },
                        handleCommissions(event) {
                            this.commissions = event.target.value
                            //console.log(this.commissions)
                        },
                        calculateLoss_Per_Trade() {
                            console.log("calculate loss per trade...")
                            this.loss_per_trade = this.quantity * (-this.tick_pip_value) * this.stop_loss - (-this.quantity * this.commissions);
                        },
                        calculateRisk_Per_Trade() {
                            let value = this.loss_limit / this.loss_per_trade;
                            //console.log(value)
                            // this.risk_per_trade = value
                        },
                        calculateProfit_Per_Trade() {
                            this.profit_per_trade = this.quantity * this.tick_pip_value * this.profit_target - (this.quantity * this.commissions)
                        },
                        calculateNumber_of_Trades() {
                            console.log("WINS")
                            console.log(this.wins)
                            if (isNaN(this.wins)) {
                                this.number_of_trades = parseFloat(this.loses)
                            } else if (isNaN(this.loses)) {
                                this.number_of_trades = parseInt(this.wins)
                            } else {
                                this.number_of_trades = parseFloat(this.wins) + parseFloat(this.loses)
                            }
                        },
                        calculateTotal_Commissions() {
                            this.total_commissions = this.number_of_trades * parseInt(this.commissions)
                        },
                        calculateR() {
                            this.R = this.profit_target / this.stop_loss
                        },
                        calculateWins_Value() {
                            this.wins_value = this.wins * this.quantity * this.tick_pip_value * this.profit_target
                        },
                        calculateLoses_Value() {
                            this.loses_value = this.loses * this.quantity * (-this.tick_pip_value) * this.stop_loss
                        },
                        calculateWin_Rate() {
                            if (isNaN(this.wins)) {
                                this.win_rate = 0;
                            } else {
                                (((this.wins / this.number_of_trades) * 100)).toFixed(0)
                            }

                        },
                        calculateNet_Profit_Loss() {
                            this.net_profit_loss = parseFloat(this.wins_value) + parseFloat(this.loses_value) - (this.number_of_trades)
                        },
                        calculateMax_Loses_Limit() {
                            this.max_loses_limit = this.loss_limit / (-this.loss_per_trade)
                        },
                        calculateRolling_Loss() {
                            const sanitizedString = this.loss_limit.replace(/[.,]/g, '');
                            const floatValue = parseFloat(sanitizedString);
                            if (!isNaN(floatValue)) {
                                // Convert the float back to a string with a specific number of decimal places
                                floatValue.toFixed(3); // Adjust the number of decimal places as needed
                            }
                            let value = floatValue + this.net_profit_loss
                            console.log(this.net_profit_loss)
                            this.rolling_loss_limit = value.toLocaleString()
                            console.log(this.rolling_loss_limit)
                        }
                    },
                    watch: {
                        loss_limit: ['calculateRolling_Loss', 'calculateMax_Loses_Limit', 'calculateRisk_Per_Trade'],

                        quantity: ['calculateLoss_Per_Trade', 'calculateProfit_Per_Trade', 'calculateWins_Value', 'calculateLoses_Value'],
                        stop_loss: ['calculateLoss_Per_Trade', 'calculateLoses_Value', 'calculateR'],
                        tick_pip_value: ['calculateLoss_Per_Trade', 'calculateProfit_Per_Trade', 'calculateLoses_Value', 'calculateWins_Value'],
                        profit_target: ['calculateProfit_Per_Trade', 'calculateR', 'calculateWins_Value'],

                        wins: ['calculateNumber_of_Trades', 'calculateWins_Value', 'calculateWin_Rate'],
                        loses: ['calculateNumber_of_Trades', 'calculateLoses_Value'],
                        commissions: ['calculateLoss_Per_Trade', 'calculateProfit_Per_Trade', 'calculateTotal_Commissions'],

                        net_profit_loss: ['calculateRolling_Loss'],
                        wins_value: ['calculateNet_Profit_Loss'],
                        loses_value: ['calculateNet_Profit_Loss'],

                        number_of_trades: ['calculateWin_Rate', 'calculateTotal_Commissions', 'calculateNet_Profit_Loss']
                    },
                    delimiters: ['{(', ')}']
                }).mount('#vue-app')
            </script>


    </div>
    @endpush

    @push('home-css')
        <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    @endpush
