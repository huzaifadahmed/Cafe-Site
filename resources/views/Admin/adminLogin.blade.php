<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Login"/>

            <div class="mx-auto w-max">
                <form action="/adminlogin" method="POST">
                    @csrf
                    <div class="ml-4 mr-12">
                        <x-Form.EmailInput name="email"/>
                    </div>
                    
                    <div class="ml-4 mr-12 mt-4">
                        <x-Form.PasswordInput name="password"/>
                    </div>

                    <x-Form.Button name="Login"/>

                </form>
            </div>

        </div>
    </section>

    </x-template>
    
</body>
</html>