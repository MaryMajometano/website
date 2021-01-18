@extends('default')

@section('aside')

    <div class="w-45 h-45 mx-auto relative flex items-center">
        <svg class="absolute inset-0 animate-spin-slow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 180">
            <path fill="currentColor" aria-label="Honk if you like this project" d="M84.3793 168.4029l2.355.038-.073 4.455 4.755.077.072-4.455 2.356.039-.171 10.499-2.355-.038.067-4.125-4.755-.077-.067 4.125-2.355-.039.171-10.499zm-6.825-1.0547c2.563.409 3.874 2.29 3.462 4.868-.411 2.578-2.242 3.957-4.805 3.548-2.593-.414-3.889-2.292-3.477-4.87.412-2.579 2.228-3.96 4.82-3.546zm40.2034-1.0384l1.236 3.669 1.224-.412.55 1.636-.569.191c-.967.326-1.009.483-.472 2.313l-1.649.556-.651-1.934-2.02.68-.551-1.635 2.019-.681-1.102-3.271c-.34-1.009-.763-1.231-1.644-.934-.299.1-.641.263-.92.421l-.494-1.655c.45-.262.943-.492 1.469-.67 1.791-.603 2.96-.094 3.574 1.726zm-54.2899-2.3142l2.139.645-1.412 4.682c-.273.904.042 1.626.946 1.899 1.062.321 2.01-.223 2.379-1.444l1.261-4.179 2.125.642-2.375 7.868-1.867-.563.262-1.488c-.86.822-1.985 1.124-3.148.774-1.694-.512-2.399-1.915-1.87-3.667l1.56-5.169zm11.5185 7.2576c-.253 1.585.22 2.526 1.509 2.732 1.274.204 2.016-.544 2.269-2.128.253-1.586-.234-2.53-1.494-2.731-1.288-.206-2.031.542-2.284 2.127zm-21.5801-11.6214l2.488 1.122.98 3.848.832-.349 1.005-2.228 2.01.906-4.624 10.254-2.01-.906 2.534-5.619-3.913 1.673-2.338-1.054 4.583-1.882-1.547-5.765zm53.9414 10.4365l.358 2.053-5.997 1.047-.358-2.053 5.997-1.047zm21.1812-6.7896c1.097 2.368.347 4.533-2.008 5.623-1.973.914-3.639.495-4.817-1.157l1.782-1.222c.61.891 1.381 1.162 2.279.746 1.13-.523 1.351-1.617.696-3.032-.657-1.416-1.633-1.955-2.763-1.433-.912.423-1.235 1.152-.921 2.295l-2.057.556c-.498-1.968.303-3.595 2.222-4.484 2.355-1.09 4.49-.26 5.587 2.108zm-87.2439-.2964l1.901 1.231-1.108 1.713-1.901-1.231 1.108-1.713zm96.5128-5.335c1.319 2.095.925 4.453-1.322 5.869-2.018 1.271-4.248.884-5.536-1.161-.167-.265-.294-.523-.386-.784l5.116-3.221c-.791-.974-1.787-1.233-2.841-.57-.901.568-1.191 1.264-.97 2.065l-1.918.783c-.496-1.604.026-3.084 1.981-4.316 2.209-1.391 4.501-.848 5.876 1.335zm-91.4848-2.377l1.863 1.206-4.465 6.898-1.863-1.206 4.465-6.898zm90.0538 4.271l-3.39 2.135c.706.868 1.653.963 2.567.387.939-.591 1.208-1.488.823-2.522zm8.744-1.1295l1.254 1.608-1.786 1.392-1.253-1.609 1.785-1.391zm-103.4596-6.5055l1.766 1.346-3.937 5.166 1.026.782-1.046 1.372-1.026-.781-.064.083c-1.228 1.611-2.723 1.792-4.298.591-.346-.264-.692-.603-.921-.871l1.133-1.363c.181.233.354.402.593.583.62.474 1.145.478 1.718-.274l.073-.096-1.647-1.255 1.046-1.372 1.647 1.255 3.937-5.166zm97.2516-4.1675l1.108 1.323c-.217.112-.38.22-.57.367-.591.461-.627.927-.138 1.553l5.188 6.658-1.75 1.364-5.115-6.563c-1.382-1.774-1.173-2.944.329-4.114.331-.259.631-.435.948-.588zm11.5353-.9985c1.803 1.888 1.792 4.18-.085 5.972-1.898 1.813-4.177 1.708-5.979-.18-1.803-1.887-1.804-4.169.094-5.982 1.877-1.792 4.167-1.697 5.97.19zm-113.38-2.9753c.292.303.529.636.662.925l-1.169 1.23c-.114-.182-.248-.345-.405-.507-.696-.723-1.227-.755-2.617-.144l-3.39 7.702-1.613-1.674 2.514-5.109-5.084 2.44-1.52-1.577 8.203-3.549c2.118-.915 3.326-.871 4.419.263zm108.653 4.0873c-.943.901-.797 1.944.311 3.105 1.109 1.161 2.145 1.354 3.088.453.933-.89.788-1.934-.321-3.095-1.109-1.161-2.155-1.344-3.078-.463zm6.2609-9.2579l6.305 5.276-1.252 1.495-1.504-.984c.491 1.213.426 2.508-.267 3.336-.049.057-.137.139-.178.165l-1.836-1.616c.151-.087.317-.262.471-.447.895-1.069.771-2.23-.425-3.231l-2.738-2.291 1.424-1.703zm-124.8861-1.6935c1.56 2.072 1.198 4.334-.886 5.903s-4.357 1.291-5.918-.781c-1.578-2.096-1.207-4.346.877-5.914 2.084-1.57 4.349-1.304 5.927.792zm-4.556 1.028c-1.282.965-1.595 1.97-.81 3.012.775 1.03 1.828 1.008 3.11.043 1.281-.965 1.585-1.983.819-3.001-.785-1.042-1.837-1.019-3.119-.054zm133.2298-10.0329l9.371 6.163-1.072 1.629-1.268-.637c.473 1.028.454 2.147-.172 3.1-1.203 1.829-3.427 2.071-5.544.678-2.117-1.392-2.774-3.53-1.571-5.359.593-.901 1.525-1.365 2.569-1.397l-3.533-2.323 1.22-1.854zm1.61 6.066c-.685 1.039-.27 2.155.958 2.963 1.228.808 2.417.746 3.101-.294.675-1.027.277-2.168-.951-2.976-1.227-.807-2.441-.708-3.108.307zm-137.9933-9.0381l.956 1.7-1.188.858c1.155.004 2.135.52 2.701 1.527.868 1.543.43 3.029-1.218 3.956l-4.682 2.633-1.095-1.948 4.381-2.464c.81-.456.993-1.11.582-1.842-.559-.994-1.585-1.226-2.736-.579l-3.779 2.125-1.088-1.935 7.166-4.031zm147.2545-7.1624l-.548 1.95c-.943-.236-1.565.234-1.945 1.132-.415.98-.264 1.548.205 1.747.511.216.853-.014 1.312-.829l.545-.942c.92-1.597 2.025-2.171 3.31-1.628 1.45.614 1.897 2.252 1.061 4.227-.842 1.988-2.089 2.78-3.748 2.354l.542-1.936c.799.191 1.356-.126 1.736-1.024.345-.814.259-1.421-.196-1.613-.47-.199-.792.023-1.228.783l-.527.901c-1.017 1.751-2.06 2.368-3.428 1.789-1.504-.637-1.97-2.267-1.071-4.394.959-2.265 2.152-2.932 3.98-2.517zm-150.9341-1.6352l.776 2.08-10.54 3.937-.776-2.081 10.54-3.936zm158.7905-1.078l1.944.614-.682 2.159-1.944-.614.682-2.159zm-8.784-2.759l7.835 2.475-.668 2.116-7.835-2.475.668-2.116zM5.1991 113.5177l.643 2.173-1.957.579-.643-2.173 1.957-.579zm8.843-2.585l.63 2.13-7.885 2.333-.63-2.13 7.885-2.333zm154.1307-9.1304l11.021 2.277-.45 2.175-4.276-.884c.804.779 1.139 1.829.909 2.945-.359 1.735-1.695 2.562-3.487 2.191l-5.29-1.093.452-2.189 4.79.99c.926.19 1.618-.188 1.809-1.114.225-1.086-.402-1.982-1.651-2.241l-4.277-.883.45-2.174zm-156.5079-1.7566l.519 2.68-2.577 3.021.765.478 2.4-.466.419 2.165-11.043 2.14-.419-2.164 6.051-1.173-3.625-2.23-.488-2.519 4.182 2.658 3.816-4.59zm163.7739-5.7074l1.718.156-.055.598c-.092 1.015.034 1.117 1.925 1.364l-.157 1.733-2.032-.185-.193 2.122-1.718-.156.193-2.122-3.436-.312c-1.06-.097-1.434.2-1.518 1.127-.029.313-.018.691.013 1.01l-1.712-.216c-.058-.517-.07-1.061-.019-1.613.171-1.882 1.108-2.746 3.02-2.573l3.854.351.117-1.284zM8.5773 91.0323c1.646.324 2.703 1.486 2.861 3.79.177 2.605-1.387 4.366-3.961 4.542-2.47.168-4.36-1.297-4.541-3.946-.162-2.38 1.235-4.159 3.645-4.324.314-.022.601-.011.874.03l.412 6.032c1.232-.234 1.933-.988 1.848-2.231-.073-1.063-.548-1.647-1.358-1.832l.22-2.061zm-2.363 2.177c-1.098.211-1.631.999-1.558 2.076.076 1.109.738 1.77 1.831 1.921l-.273-3.997zm170.9672-9.8774c.17 2.381-1.223 4.165-3.633 4.337-.315.022-.601.012-.874-.028l-.431-6.032c-1.231.238-1.93.995-1.842 2.238.076 1.062.554 1.645 1.365 1.828l-.214 2.061c-1.648-.319-2.708-1.476-2.872-3.782-.187-2.605 1.373-4.371 3.947-4.554 2.47-.177 4.364 1.283 4.554 3.932zm-3.558-1.777l.285 3.997c1.099-.214 1.629-1.004 1.552-2.081-.079-1.108-.743-1.768-1.837-1.916zM3.5254 78.627l1.718.161-.199 2.121 3.436.323c1.061.1 1.435-.197 1.522-1.123.029-.313.02-.691-.011-1.011l1.713.222c.057.518.066 1.061.014 1.613-.177 1.883-1.117 2.744-3.029 2.564l-3.854-.362-.121 1.285-1.718-.162.056-.597c.096-1.016-.03-1.118-1.921-1.371l.163-1.733 2.032.191.199-2.121zm174.4009-9.9373l.427 2.165-6.053 1.191 3.635 2.221.495 2.518-4.191-2.646-3.805 4.603-.528-2.68 2.57-3.03-.767-.476-2.4.473-.426-2.165 11.043-2.174zM8.321 68.2701l5.284 1.11-.459 2.187-4.785-1.005c-.925-.194-1.617.182-1.811 1.107-.228 1.086.396 1.983 1.643 2.245l4.272.897-.456 2.173L1 74.6721l.456-2.172 4.272.896c-.802-.781-1.133-1.831-.899-2.947.364-1.732 1.701-2.555 3.492-2.179zm164.9416-4.8927l.636 2.127-7.877 2.358-.636-2.127 7.877-2.358zM7.3738 61.856l7.826 2.509-.677 2.113-7.827-2.508.678-2.114zm168.7868.6374l.65 2.17-1.955.586-.649-2.171 1.954-.585zM4.4978 60.903l1.942.623-.691 2.156-1.943-.623.692-2.156zm169.5971-4.2737l.785 2.078-10.53 3.971-.783-2.078 10.528-3.971zM13.4388 53.0211l-.549 1.935c-.798-.194-1.357.122-1.739 1.018-.348.814-.264 1.421.191 1.615.469.2.792-.021 1.23-.779l.53-.899c1.024-1.749 2.069-2.363 3.435-1.78 1.503.643 1.964 2.275 1.057 4.399-.966 2.262-2.162 2.926-3.988 2.504l.554-1.948c.942.239 1.566-.228 1.949-1.125.418-.979.269-1.548-.2-1.749-.51-.218-.853.011-1.314.825l-.548.94c-.926 1.595-2.034 2.166-3.317 1.618-1.448-.619-1.889-2.258-1.047-4.231.848-1.986 2.097-2.774 3.756-2.343zm150.595-9.8131l1.102 1.944-4.371 2.48c-.808.458-.989 1.112-.575 1.843.563.992 1.589 1.22 2.737.569l3.771-2.139 1.095 1.931-7.15 4.055-.962-1.696 1.185-.861c-1.155 0-2.137-.513-2.706-1.517-.873-1.54-.441-3.027 1.203-3.959l4.671-2.65zM23.2483 39.9782c2.113 1.4 2.762 3.54 1.553 5.364-.597.9-1.531 1.36-2.575 1.388l3.524 2.336-1.226 1.85-9.348-6.198 1.077-1.624 1.266.641c-.468-1.03-.446-2.149.183-3.099 1.21-1.824 3.434-2.059 5.546-.658zm-4.361 2.182c-.679 1.024-.285 2.167.939 2.979 1.225.812 2.439.717 3.11-.295.688-1.037.278-2.155-.947-2.967-1.225-.812-2.414-.755-3.102.283zm140.7749-5.3865c1.586 2.091 1.224 4.343-.855 5.92-2.078 1.577-4.345 1.32-5.931-.771-1.568-2.067-1.215-4.331.865-5.908 2.079-1.576 4.354-1.307 5.921.759zm-4.544 1.058c-1.278.969-1.579 1.988-.808 3.003.789 1.04 1.842 1.013 3.12.043 1.278-.97 1.588-1.976.799-3.016-.779-1.027-1.832-1.001-3.111-.03zM25.2717 30.9588l1.829 1.623c-.152.088-.318.261-.473.445-.9 1.065-.781 2.226.411 3.232l2.728 2.302-1.432 1.696-6.28-5.301 1.258-1.49 1.499.991c-.486-1.214-.414-2.508.283-3.334.048-.057.137-.139.177-.164zm124.5156-5.0701l1.617 1.67-2.499 5.115 5.078-2.455 1.524 1.573-8.192 3.572c-2.116.922-3.325.881-4.42-.25-.292-.301-.532-.634-.664-.923l1.165-1.233c.114.182.249.344.405.505.699.722 1.229.751 2.618.137l3.368-7.711zm-113.8002.4561c1.795 1.896 1.785 4.177-.121 5.982-1.885 1.785-4.174 1.68-5.969-.216s-1.774-4.187.11-5.972c1.907-1.805 4.185-1.69 5.98.206zm-4.742 1.101c-.937.887-.796 1.931.308 3.097s2.149 1.354 3.075.477c.948-.898.807-1.941-.297-3.107-1.104-1.166-2.138-1.364-3.086-.467zm6.4167-7.5936l5.09 6.588c1.375 1.781 1.161 2.951-.347 4.116-.332.257-.633.432-.952.584l-1.102-1.329c.218-.111.381-.219.571-.365.594-.459.632-.925.146-1.553l-5.163-6.684 1.757-1.357zm108.1361-1.4673c.347.262.694.6.923.868l-1.127 1.366c-.182-.232-.355-.4-.594-.582-.622-.47-1.148-.472-1.717.282l-.072.095 1.65 1.249-1.04 1.376-1.652-1.249-3.917 5.18-1.771-1.339 3.918-5.18-1.028-.778 1.04-1.376 1.029.778.062-.083c1.222-1.616 2.717-1.802 4.296-.607zm-9.647-2.8755l1.867 1.199-4.44 6.915-1.867-1.199 4.44-6.915zm-86.6783 1.0371c.167.267.292.525.385.786l-5.129 3.203c.787.977 1.783 1.24 2.839.58.904-.565 1.195-1.259.977-2.061l1.922-.776c.489 1.605-.037 3.084-1.997 4.309-2.214 1.383-4.505.832-5.872-1.357-1.312-2.099-.909-4.457 1.344-5.864 2.023-1.264 4.251-.869 5.531 1.18zm-13.6398.8887l1.248 1.615-1.793 1.385-1.247-1.615 1.792-1.385zm9.0358-.6137c-.942.589-1.214 1.484-.833 2.52l3.398-2.123c-.703-.87-1.649-.969-2.565-.397zm78.8868-11.0586l2.013.899-2.515 5.626 3.906-1.686 2.341 1.046-4.576 1.896 1.565 5.758-2.491-1.114-.992-3.842-.83.351-.997 2.231-2.013-.9 4.589-10.265zM58.724 11.1954l-1.785 1.215c-.607-.893-1.377-1.167-2.276-.753-1.131.519-1.355 1.612-.704 3.029.65 1.417 1.625 1.959 2.756 1.44.913-.419 1.239-1.146.928-2.291l2.058-.549c.491 1.969-.314 3.593-2.235 4.475-2.358 1.083-4.49.247-5.579-2.124-1.088-2.371-.332-4.533 2.025-5.616 1.976-.907 3.639-.483 4.812 1.174zm79.0509 1.757l1.905 1.224-1.102 1.715-1.906-1.223 1.103-1.716zm-26.4941-8.0845l1.868.555-.255 1.489c.856-.825 1.98-1.132 3.144-.787 1.696.505 2.406 1.905 1.885 3.658l-1.538 5.175-2.142-.637 1.393-4.685c.269-.906-.048-1.626-.955-1.895-1.063-.317-2.008.231-2.371 1.453l-1.244 4.183-2.127-.632 2.342-7.877zm-48.9304-.1687l.646 1.936 2.021-.674.546 1.637-2.022.674 1.092 3.274c.337 1.011.759 1.234 1.641.94.3-.1.641-.261.921-.418l.489 1.657c-.451.26-.944.488-1.471.664-1.794.598-2.961.085-3.568-1.737l-1.225-3.673-1.224.408-.546-1.637.569-.19c.969-.323 1.011-.479.48-2.311l1.651-.55zm41.2333-1.4519c2.593.403 3.895 2.274 3.494 4.853-.4 2.577-2.21 3.965-4.803 3.562-2.562-.398-3.88-2.272-3.479-4.85.401-2.579 2.225-3.964 4.788-3.565zM86.1787 0l2.355.038-.066 4.124 4.754.079.067-4.126 2.355.039-.171 10.499-2.355-.038.072-4.455-4.754-.077-.073 4.455-2.355-.039L86.1787 0zm14.869 7.1623c-.246 1.585.245 2.526 1.504 2.722 1.289.2 2.028-.55 2.274-2.135.247-1.585-.229-2.524-1.519-2.725-1.274-.198-2.012.552-2.259 2.138zm-22.322-1.318l.352 2.055-6.003 1.028-.352-2.055 6.003-1.028z"/>
        </svg>
        @include('layouts.partials.likes', [
            'show' => $content->isLikeable()
        ])
    </div>

    @include('layouts.partials.cases', [
        'title' => __('Similar case stories'),
    ])

    @include('layouts.partials.contact', [
        'component' => $content->relations()->first('contact')
    ])
@endsection
