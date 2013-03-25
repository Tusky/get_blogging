RubyOnRails::Application.routes.draw do
  get 'home/list_all'
  get 'home/show'
  get 'home/show_author'
  get 'home/show_tags'

  resources :post_categories
  resources :categories
  resources :posts

  authenticated :user do
    root :to => 'home#list_all'
  end
  root :to => 'home#list_all'
  devise_for :users
  resources :users
end