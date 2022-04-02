<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <style>
        *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Nunito,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input:-ms-input-placeholder,textarea:-ms-input-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}[multiple],[type=date],[type=datetime-local],[type=email],[type=month],[type=number],[type=password],[type=search],[type=tel],[type=text],[type=time],[type=url],[type=week],select,textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#6b7280;border-width:1px;border-radius:0;padding-top:.5rem;padding-right:.75rem;padding-bottom:.5rem;padding-left:.75rem;font-size:1rem;line-height:1.5rem;--tw-shadow:0 0 #0000}[multiple]:focus,[type=date]:focus,[type=datetime-local]:focus,[type=email]:focus,[type=month]:focus,[type=number]:focus,[type=password]:focus,[type=search]:focus,[type=tel]:focus,[type=text]:focus,[type=time]:focus,[type=url]:focus,[type=week]:focus,select:focus,textarea:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);border-color:#2563eb}input::-moz-placeholder,textarea::-moz-placeholder{color:#6b7280;opacity:1}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#6b7280;opacity:1}input::placeholder,textarea::placeholder{color:#6b7280;opacity:1}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-date-and-time-value{min-height:1.5em}select{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");background-position:right .5rem center;background-repeat:no-repeat;background-size:1.5em 1.5em;padding-right:2.5rem;-webkit-print-color-adjust:exact;color-adjust:exact}[multiple]{background-image:initial;background-position:initial;background-repeat:unset;background-size:initial;padding-right:.75rem;-webkit-print-color-adjust:unset;color-adjust:unset}[type=checkbox],[type=radio]{-webkit-appearance:none;-moz-appearance:none;appearance:none;padding:0;-webkit-print-color-adjust:exact;color-adjust:exact;display:inline-block;vertical-align:middle;background-origin:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;flex-shrink:0;height:1rem;width:1rem;color:#2563eb;background-color:#fff;border-color:#6b7280;border-width:1px;--tw-shadow:0 0 #0000}[type=checkbox]{border-radius:0}[type=radio]{border-radius:100%}[type=checkbox]:focus,[type=radio]:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:2px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}[type=checkbox]:checked,[type=radio]:checked{border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat}[type=checkbox]:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")}[type=radio]:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")}[type=checkbox]:checked:focus,[type=checkbox]:checked:hover,[type=radio]:checked:focus,[type=radio]:checked:hover{border-color:transparent;background-color:currentColor}[type=checkbox]:indeterminate{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat}[type=checkbox]:indeterminate:focus,[type=checkbox]:indeterminate:hover{border-color:transparent;background-color:currentColor}[type=file]{background:unset;border-color:inherit;border-width:0;border-radius:0;padding:0;font-size:unset;line-height:inherit}[type=file]:focus{outline:1px auto -webkit-focus-ring-color}*,::after,::before{--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1536px){.container{max-width:1536px}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{top:0;right:0;bottom:0;left:0}.inset-x-0{left:0;right:0}.inset-y-0{top:0;bottom:0}.top-0{top:0}.right-0{right:0}.left-0{left:0}.-top-10{top:-2.5rem}.bottom-5{bottom:1.25rem}.right-10{right:2.5rem}.top-3{top:.75rem}.z-0{z-index:0}.z-40{z-index:40}.z-50{z-index:50}.z-20{z-index:20}.z-30{z-index:30}.-z-10{z-index:-10}.col-span-2{grid-column:span 2/span 2}.mx-auto{margin-left:auto;margin-right:auto}.mx-2{margin-left:.5rem;margin-right:.5rem}.-mx-1\.5{margin-left:-.375rem;margin-right:-.375rem}.-my-1\.5{margin-top:-.375rem;margin-bottom:-.375rem}.-mx-1{margin-left:-.25rem;margin-right:-.25rem}.-my-1{margin-top:-.25rem;margin-bottom:-.25rem}.ml-3{margin-left:.75rem}.-ml-px{margin-left:-1px}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.mt-3{margin-top:.75rem}.mt-6{margin-top:1.5rem}.-mr-0\.5{margin-right:-.125rem}.-mr-0{margin-right:0}.mt-10{margin-top:2.5rem}.mb-4{margin-bottom:1rem}.ml-auto{margin-left:auto}.mt-1{margin-top:.25rem}.mb-3{margin-bottom:.75rem}.mb-1{margin-bottom:.25rem}.mr-4{margin-right:1rem}.mb-6{margin-bottom:1.5rem}.mb-64{margin-bottom:16rem}.mb-2{margin-bottom:.5rem}.mb-10{margin-bottom:2.5rem}.-mt-4{margin-top:-1rem}.block{display:block}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.hidden{display:none}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.h-screen{height:100vh}.h-12{height:3rem}.h-6{height:1.5rem}.h-4{height:1rem}.h-20{height:5rem}.h-max{height:-webkit-max-content;height:-moz-max-content;height:max-content}.h-24{height:6rem}.h-32{height:8rem}.h-48{height:12rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.min-h-\[90\.5vh\]{min-height:90.5vh}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.w-48{width:12rem}.w-full{width:100%}.w-96{width:24rem}.w-12{width:3rem}.w-6{width:1.5rem}.w-4{width:1rem}.w-20{width:5rem}.w-64{width:16rem}.w-24{width:6rem}.w-\[340px\]{width:340px}.min-w-full{min-width:100%}.max-w-xl{max-width:36rem}.max-w-6xl{max-width:72rem}.max-w-7xl{max-width:80rem}.max-w-xs{max-width:20rem}.max-w-full{max-width:100%}.flex-1{flex:1 1 0%}.flex-shrink-0{flex-shrink:0}.table-fixed{table-layout:fixed}.origin-top-left{transform-origin:top left}.origin-top-right{transform-origin:top right}.origin-top{transform-origin:top}.origin-\[0\]{transform-origin:0}.translate-x-0{--tw-translate-x:0px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-x-full{--tw-translate-x:-100%;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-y-6{--tw-translate-y:-1.5rem;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.scale-95{--tw-scale-x:.95;--tw-scale-y:.95;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.scale-75{--tw-scale-x:.75;--tw-scale-y:.75;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}@-webkit-keyframes fade-in-down{0%{opacity:0;transform:translateY(-10px)}100%{opacity:1;transform:translateY(0)}}@keyframes fade-in-down{0%{opacity:0;transform:translateY(-10px)}100%{opacity:1;transform:translateY(0)}}.animate-fade-in-down{-webkit-animation:fade-in-down .5s ease-out;animation:fade-in-down .5s ease-out}@-webkit-keyframes spin{to{transform:rotate(360deg)}}@keyframes spin{to{transform:rotate(360deg)}}.animate-spin{-webkit-animation:spin 1s linear infinite;animation:spin 1s linear infinite}.cursor-default{cursor:default}.cursor-pointer{cursor:pointer}.list-inside{list-style-position:inside}.list-none{list-style-type:none}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-2{gap:.5rem}.space-x-3>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(.75rem * var(--tw-space-x-reverse));margin-left:calc(.75rem * calc(1 - var(--tw-space-x-reverse)))}.divide-y>:not([hidden])~:not([hidden]){--tw-divide-y-reverse:0;border-top-width:calc(1px * calc(1 - var(--tw-divide-y-reverse)));border-bottom-width:calc(1px * var(--tw-divide-y-reverse))}.divide-gray-200>:not([hidden])~:not([hidden]){--tw-divide-opacity:1;border-color:rgb(229 231 235 / var(--tw-divide-opacity))}.overflow-hidden{overflow:hidden}.overflow-x-auto{overflow-x:auto}.overflow-y-auto{overflow-y:auto}.overflow-x-hidden{overflow-x:hidden}.whitespace-nowrap{white-space:nowrap}.rounded-md{border-radius:.375rem}.rounded{border-radius:.25rem}.rounded-lg{border-radius:.5rem}.rounded-full{border-radius:9999px}.rounded-xl{border-radius:.75rem}.rounded-3xl{border-radius:1.5rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-0{border-width:0}.border-4{border-width:4px}.border-t{border-top-width:1px}.border-r{border-right-width:1px}.border-b-2{border-bottom-width:2px}.border-l-4{border-left-width:4px}.border-b{border-bottom-width:1px}.border-b-4{border-bottom-width:4px}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity))}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-gray-400{--tw-border-opacity:1;border-color:rgb(156 163 175 / var(--tw-border-opacity))}.border-transparent{border-color:transparent}.border-indigo-400{--tw-border-opacity:1;border-color:rgb(129 140 248 / var(--tw-border-opacity))}.border-\[\#004a77\]{--tw-border-opacity:1;border-color:rgb(0 74 119 / var(--tw-border-opacity))}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity))}.border-gray-900{--tw-border-opacity:1;border-color:rgb(17 24 39 / var(--tw-border-opacity))}.border-white{--tw-border-opacity:1;border-color:rgb(255 255 255 / var(--tw-border-opacity))}.border-blue-200{--tw-border-opacity:1;border-color:rgb(191 219 254 / var(--tw-border-opacity))}.border-b-blue-sales-1{--tw-border-opacity:1;border-bottom-color:rgb(0 74 119 / var(--tw-border-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-\[\#004a77\]{--tw-bg-opacity:1;background-color:rgb(0 74 119 / var(--tw-bg-opacity))}.bg-indigo-50{--tw-bg-opacity:1;background-color:rgb(238 242 255 / var(--tw-bg-opacity))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.bg-blue-sales-1{--tw-bg-opacity:1;background-color:rgb(0 74 119 / var(--tw-bg-opacity))}.bg-gray-500{--tw-bg-opacity:1;background-color:rgb(107 114 128 / var(--tw-bg-opacity))}.bg-red-100{--tw-bg-opacity:1;background-color:rgb(254 226 226 / var(--tw-bg-opacity))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.bg-red-600{--tw-bg-opacity:1;background-color:rgb(220 38 38 / var(--tw-bg-opacity))}.bg-gray-600{--tw-bg-opacity:1;background-color:rgb(75 85 99 / var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.bg-transparent{background-color:transparent}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-green-600{--tw-bg-opacity:1;background-color:rgb(22 163 74 / var(--tw-bg-opacity))}.bg-red-700{--tw-bg-opacity:1;background-color:rgb(185 28 28 / var(--tw-bg-opacity))}.bg-yellow-400{--tw-bg-opacity:1;background-color:rgb(250 204 21 / var(--tw-bg-opacity))}.bg-yellow-500{--tw-bg-opacity:1;background-color:rgb(234 179 8 / var(--tw-bg-opacity))}.bg-blue-100{--tw-bg-opacity:1;background-color:rgb(219 234 254 / var(--tw-bg-opacity))}.bg-blue-600{--tw-bg-opacity:1;background-color:rgb(37 99 235 / var(--tw-bg-opacity))}.bg-opacity-75{--tw-bg-opacity:0.75}.bg-opacity-25{--tw-bg-opacity:0.25}.fill-blue-600{fill:#2563eb}.object-cover{-o-object-fit:cover;object-fit:cover}.p-6{padding:1.5rem}.p-4{padding:1rem}.p-1\.5{padding:.375rem}.p-1{padding:.25rem}.p-2\.5{padding:.625rem}.p-2{padding:.5rem}.p-5{padding:1.25rem}.p-8{padding:2rem}.px-4{padding-left:1rem;padding-right:1rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.px-1{padding-left:.25rem;padding-right:.25rem}.py-8{padding-top:2rem;padding-bottom:2rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.px-3{padding-left:.75rem;padding-right:.75rem}.py-2\.5{padding-top:.625rem;padding-bottom:.625rem}.px-0{padding-left:0;padding-right:0}.px-7{padding-left:1.75rem;padding-right:1.75rem}.py-3\.5{padding-top:.875rem;padding-bottom:.875rem}.py-1\.5{padding-top:.375rem;padding-bottom:.375rem}.px-8{padding-left:2rem;padding-right:2rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.pt-8{padding-top:2rem}.pt-1{padding-top:.25rem}.pl-3{padding-left:.75rem}.pr-4{padding-right:1rem}.pt-5{padding-top:1.25rem}.pb-6{padding-bottom:1.5rem}.pt-16{padding-top:4rem}.pt-4{padding-top:1rem}.pb-20{padding-bottom:5rem}.pb-4{padding-bottom:1rem}.pb-1{padding-bottom:.25rem}.pb-3{padding-bottom:.75rem}.text-left{text-align:left}.text-center{text-align:center}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.font-sans{font-family:Nunito,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-base{font-size:1rem;line-height:1.5rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-2xl{font-size:1.5rem;line-height:2rem}.text-xs{font-size:.75rem;line-height:1rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.font-normal{font-weight:400}.font-bold{font-weight:700}.uppercase{text-transform:uppercase}.leading-5{line-height:1.25rem}.leading-7{line-height:1.75rem}.leading-tight{line-height:1.25}.leading-6{line-height:1.5rem}.leading-4{line-height:1rem}.tracking-wider{letter-spacing:.05em}.tracking-widest{letter-spacing:.1em}.tracking-wide{letter-spacing:.025em}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-\[\#004a77\]{--tw-text-opacity:1;color:rgb(0 74 119 / var(--tw-text-opacity))}.text-red-600{--tw-text-opacity:1;color:rgb(220 38 38 / var(--tw-text-opacity))}.text-indigo-700{--tw-text-opacity:1;color:rgb(67 56 202 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-gray-100{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity))}.text-blue-sales-1{--tw-text-opacity:1;color:rgb(0 74 119 / var(--tw-text-opacity))}.text-green-400{--tw-text-opacity:1;color:rgb(74 222 128 / var(--tw-text-opacity))}.text-blue-200{--tw-text-opacity:1;color:rgb(191 219 254 / var(--tw-text-opacity))}.text-blue-600{--tw-text-opacity:1;color:rgb(37 99 235 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-0{opacity:0}.opacity-100{opacity:1}.opacity-50{opacity:.5}.opacity-25{opacity:.25}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / 0.1),0 1px 2px -1px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1),0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1),0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1),0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.ring-gray-300{--tw-ring-opacity:1;--tw-ring-color:rgb(209 213 219 / var(--tw-ring-opacity))}.ring-black{--tw-ring-opacity:1;--tw-ring-color:rgb(0 0 0 / var(--tw-ring-opacity))}.ring-opacity-5{--tw-ring-opacity:0.05}.transition{transition-property:color,background-color,border-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.transition-opacity{transition-property:opacity;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.duration-150{transition-duration:150ms}.duration-200{transition-duration:.2s}.duration-75{transition-duration:75ms}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(0.4,0,0.2,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,0.2,1)}.ease-in{transition-timing-function:cubic-bezier(0.4,0,1,1)}.hover\:border-gray-300:hover{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity))}.hover\:bg-gray-700:hover{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.hover\:bg-gray-50:hover{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.hover\:bg-red-700:hover{--tw-bg-opacity:1;background-color:rgb(185 28 28 / var(--tw-bg-opacity))}.hover\:bg-gray-600:hover{--tw-bg-opacity:1;background-color:rgb(75 85 99 / var(--tw-bg-opacity))}.hover\:bg-blue-900:hover{--tw-bg-opacity:1;background-color:rgb(30 58 138 / var(--tw-bg-opacity))}.hover\:bg-red-800:hover{--tw-bg-opacity:1;background-color:rgb(153 27 27 / var(--tw-bg-opacity))}.hover\:bg-yellow-500:hover{--tw-bg-opacity:1;background-color:rgb(234 179 8 / var(--tw-bg-opacity))}.hover\:bg-\[\#004a99\]:hover{--tw-bg-opacity:1;background-color:rgb(0 74 153 / var(--tw-bg-opacity))}.hover\:bg-yellow-600:hover{--tw-bg-opacity:1;background-color:rgb(202 138 4 / var(--tw-bg-opacity))}.hover\:bg-opacity-25:hover{--tw-bg-opacity:0.25}.hover\:text-gray-500:hover{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.hover\:text-gray-400:hover{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.hover\:text-gray-800:hover{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.hover\:text-gray-100:hover{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-blue-sales-1:hover{--tw-text-opacity:1;color:rgb(0 74 119 / var(--tw-text-opacity))}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity:1;border-color:rgb(147 197 253 / var(--tw-border-opacity))}.focus\:border-gray-900:focus{--tw-border-opacity:1;border-color:rgb(17 24 39 / var(--tw-border-opacity))}.focus\:border-indigo-300:focus{--tw-border-opacity:1;border-color:rgb(165 180 252 / var(--tw-border-opacity))}.focus\:border-indigo-700:focus{--tw-border-opacity:1;border-color:rgb(67 56 202 / var(--tw-border-opacity))}.focus\:border-gray-300:focus{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity))}.focus\:border-blue-600:focus{--tw-border-opacity:1;border-color:rgb(37 99 235 / var(--tw-border-opacity))}.focus\:bg-gray-100:focus{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.focus\:bg-indigo-100:focus{--tw-bg-opacity:1;background-color:rgb(224 231 255 / var(--tw-bg-opacity))}.focus\:bg-gray-50:focus{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.focus\:text-gray-700:focus{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:text-indigo-800:focus{--tw-text-opacity:1;color:rgb(55 48 163 / var(--tw-text-opacity))}.focus\:text-gray-800:focus{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-0:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-4:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-indigo-200:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(199 210 254 / var(--tw-ring-opacity))}.focus\:ring-red-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(239 68 68 / var(--tw-ring-opacity))}.focus\:ring-indigo-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(99 102 241 / var(--tw-ring-opacity))}.focus\:ring-gray-300:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(209 213 219 / var(--tw-ring-opacity))}.focus\:ring-blue-300:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(147 197 253 / var(--tw-ring-opacity))}.focus\:ring-red-300:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(252 165 165 / var(--tw-ring-opacity))}.focus\:ring-yellow-300:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(253 224 71 / var(--tw-ring-opacity))}.focus\:ring-opacity-50:focus{--tw-ring-opacity:0.5}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.active\:bg-gray-100:active{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.active\:bg-gray-900:active{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.active\:text-gray-700:active{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.active\:text-gray-500:active{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.group:hover .group-hover\:text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.peer:-moz-placeholder-shown~.peer-placeholder-shown\:translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:-ms-input-placeholder~.peer-placeholder-shown\:translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:placeholder-shown~.peer-placeholder-shown\:translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:-moz-placeholder-shown~.peer-placeholder-shown\:scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:-ms-input-placeholder~.peer-placeholder-shown\:scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:placeholder-shown~.peer-placeholder-shown\:scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:focus~.peer-focus\:left-0{left:0}.peer:focus~.peer-focus\:-translate-y-6{--tw-translate-y:-1.5rem;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:focus~.peer-focus\:scale-75{--tw-scale-x:.75;--tw-scale-y:.75;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:focus~.peer-focus\:text-blue-600{--tw-text-opacity:1;color:rgb(37 99 235 / var(--tw-text-opacity))}@media (prefers-color-scheme:dark){.dark\:divide-gray-700>:not([hidden])~:not([hidden]){--tw-divide-opacity:1;border-color:rgb(55 65 81 / var(--tw-divide-opacity))}.dark\:border-gray-700{--tw-border-opacity:1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:border-gray-600{--tw-border-opacity:1;border-color:rgb(75 85 99 / var(--tw-border-opacity))}.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-blue-600{--tw-bg-opacity:1;background-color:rgb(37 99 235 / var(--tw-bg-opacity))}.dark\:bg-red-600{--tw-bg-opacity:1;background-color:rgb(220 38 38 / var(--tw-bg-opacity))}.dark\:bg-gray-700{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.dark\:hover\:bg-gray-700:hover{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.dark\:hover\:bg-blue-700:hover{--tw-bg-opacity:1;background-color:rgb(29 78 216 / var(--tw-bg-opacity))}.dark\:hover\:bg-red-700:hover{--tw-bg-opacity:1;background-color:rgb(185 28 28 / var(--tw-bg-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:focus\:border-blue-500:focus{--tw-border-opacity:1;border-color:rgb(59 130 246 / var(--tw-border-opacity))}.dark\:focus\:ring-blue-800:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(30 64 175 / var(--tw-ring-opacity))}.dark\:focus\:ring-red-900:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(127 29 29 / var(--tw-ring-opacity))}.dark\:focus\:ring-yellow-900:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(113 63 18 / var(--tw-ring-opacity))}.dark\:focus\:ring-red-800:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(153 27 27 / var(--tw-ring-opacity))}.peer:focus~.peer-focus\:dark\:text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}}@media (min-width:640px){.sm\:my-8{margin-top:2rem;margin-bottom:2rem}.sm\:mx-0{margin-left:0;margin-right:0}.sm\:ml-0{margin-left:0}.sm\:mt-0{margin-top:0}.sm\:ml-4{margin-left:1rem}.sm\:ml-3{margin-left:.75rem}.sm\:ml-6{margin-left:1.5rem}.sm\:block{display:block}.sm\:inline-block{display:inline-block}.sm\:flex{display:flex}.sm\:grid{display:grid}.sm\:hidden{display:none}.sm\:h-20{height:5rem}.sm\:h-10{height:2.5rem}.sm\:h-screen{height:100vh}.sm\:w-full{width:100%}.sm\:w-10{width:2.5rem}.sm\:w-auto{width:auto}.sm\:max-w-xl{max-width:36rem}.sm\:max-w-lg{max-width:32rem}.sm\:flex-1{flex:1 1 0%}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:flex-row-reverse{flex-direction:row-reverse}.sm\:items-start{align-items:flex-start}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:gap-2{gap:.5rem}.sm\:rounded-lg{border-radius:.5rem}.sm\:p-0{padding:0}.sm\:p-6{padding:1.5rem}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:px-12{padding-left:3rem;padding-right:3rem}.sm\:pt-0{padding-top:0}.sm\:pb-4{padding-bottom:1rem}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}.sm\:align-middle{vertical-align:middle}.sm\:text-sm{font-size:.875rem;line-height:1.25rem}}@media (min-width:768px){.md\:mr-4{margin-right:1rem}.md\:flex{display:flex}.md\:inline-flex{display:inline-flex}.md\:hidden{display:none}.md\:h-\[700px\]{height:700px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:justify-start{justify-content:flex-start}.md\:space-x-10>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2.5rem * var(--tw-space-x-reverse));margin-left:calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))}.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}}@media (min-width:1024px){.lg\:static{position:static}.lg\:inset-0{top:0;right:0;bottom:0;left:0}.lg\:hidden{display:none}.lg\:w-0{width:0}.lg\:w-2\/3{width:66.666667%}.lg\:max-w-3xl{max-width:48rem}.lg\:flex-1{flex:1 1 0%}.lg\:translate-x-0{--tw-translate-x:0px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.lg\:p-12{padding:3rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:px-6{padding-left:1.5rem;padding-right:1.5rem}.lg\:text-left{text-align:left}.lg\:text-lg{font-size:1.125rem;line-height:1.75rem}}@media (min-width:1280px){.xl\:block{display:block}.xl\:text-lg{font-size:1.125rem;line-height:1.75rem}}
    </style>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
        <div class="max-w-xl p-8 text-center bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">
            @yield('content')
        </div>
    </div>
</body>

</html>
