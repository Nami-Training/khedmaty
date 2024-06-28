@extends('user.layout.master')

@section('title', 'Payment')

@section('content')
    <content>
        <div class="mysr-form mysr-form-moyasarForm mysr-form-fixedWidth" id="mysr-form-form-el" payment-form="true">
            <div class="mysr-form-methodButtons"></div>
            <div>
                <div class="mysr-form-method">
                    <form>
                        <div class="mysr-form-inputGroup">
                            <div class="mysr-form-labelGroup"><label class="mysr-form-label" for="mysr-cc-name">Name on
                                    card</label><span
                                    class="mysr-form-requiredAlert mysr-form-requiredAlertHidden">Required</span></div>
                            <div><input id="mysr-cc-name" class="mysr-form-input" placeholder="Name on card"
                                    autocomplete="ccname" dir="ltr">
                                <div class="mysr-form-alertContainer"><span
                                        class="mysr-form-inputAlert mysr-form-alertDanger mysr-form-inputAlertHidden"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mysr-form-inputGroup">
                            <div class="mysr-form-labelGroup"><label class="mysr-form-label" for="mysr-cc-number">Card
                                    information</label><span class="mysr-form-requiredAlert">Required</span></div>
                            <div class="mysr-form-cardInfo">
                                <div class="mysr-form-cardInfoElement mysr-form-ccInputGroup mysr-form-cardInfo"
                                    dir="ltr">
                                    <input id="mysr-cc-number" type="text"
                                        class="mysr-form-input mysr-form-bottomLeftRadius0 mysr-form-bottomRightRadius0 mysr-form-inputError"
                                        placeholder="1234 5678 9101 1121" autocomplete="cc-number" inputmode="numeric">
                                    <div class="mysr-form-ccIconsGroup"><span
                                            class="mysr-form-ccIcon mysr-form-ccIconAmex"></span><span
                                            class="mysr-form-ccIcon mysr-form-ccIconMada"></span><span
                                            class="mysr-form-ccIcon mysr-form-ccIconVisa"></span><span
                                            class="mysr-form-ccIcon mysr-form-ccIconMastercard"></span></div>
                                </div>
                                <div class="mysr-form-cardInfoElement mysr-form-ccInputGroup mysr-form-cardInfo"
                                    dir="ltr">
                                    <input
                                        class="mysr-form-input mysr-form-cardInfoElement mysr-form-cardInfoHalfWidth mysr-form-topLeftRadius0 mysr-form-topRightRadius0 mysr-form-bottomRightRadius0"
                                        type="text" placeholder="MM / YY" autocomplete="cc-exp"
                                        inputmode="numeric"><input
                                        class="mysr-form-input mysr-form-cardInfoElement mysr-form-cardInfoHalfWidth mysr-form-topLeftRadius0 mysr-form-topRightRadius0 mysr-form-bottomLeftRadius0"
                                        type="text" placeholder="CVC" autocomplete="cc-csc" inputmode="numeric">
                                </div>
                                <div class="mysr-form-alertContainer"></div>
                            </div>
                        </div><button class="mysr-form-button">Pay SAR&nbsp;120.00</button>
                    </form>
                </div>
            </div>
            <div class="mysr-form-footer"><a href="https://moyasar.com/?ref=payment-form-v1.13.0" target="_blank">Powered by
                    <strong>Moyasar</strong></a><span>Test Mode Enabled: Please do not use in production!</span></div>
        </div>


    </content>
@endsection
