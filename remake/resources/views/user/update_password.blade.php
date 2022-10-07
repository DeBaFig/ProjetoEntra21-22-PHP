<div>
                            <x-input-label for="password" :value="__('Senha')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirme a Senha')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                        </div>