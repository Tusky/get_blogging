require 'spec_helper'

describe HomeController do

  describe "GET 'list_all'" do
    it "returns http success" do
      get 'list_all'
      response.should be_success
    end
  end

end
