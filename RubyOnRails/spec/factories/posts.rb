# Read about factories at https://github.com/thoughtbot/factory_girl

FactoryGirl.define do
  factory :post do
    title "MyString"
    body "MyText"
    user_id 1
    added_on "2013-03-25 08:36:57"
  end
end
