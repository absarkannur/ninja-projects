import { View, Text, StyleSheet, Alert, FlatList, SafeAreaView, Image, TouchableOpacity } from 'react-native'
import React, { useState } from 'react'
import AppWrapper from '@/components/AppWrapper'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'
import { Colors } from '@/constants/Colors'

import { Data } from '@/constants/data'
import { router, Redirect } from 'expo-router'

type dataTypes = { id: number; brand_name: string; image: string; products: object };

type ItemProps = { 
    item: dataTypes; 
    onPress: () => void; 
    id: number; 
    active: boolean; 
    title: string; 
    logo: string 
};

const Item = ({ item, onPress, id, active, title, logo }: ItemProps) => (
    <TouchableOpacity onPress={ onPress }> 
        <View style={[ Styles.brand ]}>
            <Image style={{ width: 100, height: 100, resizeMode: 'contain' }} source={{ uri: logo }} />
            {
                ( active) ? <View style={{ position: 'absolute', top: 0, left: 0, height: 100, width: 100, backgroundColor: 'gray', opacity: 0.5 }}></View> : '' 
            }
        </View>
    </TouchableOpacity>
);


export default function BrandsScreen() {

    const [ brands, setBrands ] = useState<any>([]);
    const [selectedId, setSelectedId] = useState<string>();
    
    const handleBrand = ( value: number ) => {
        
        let newBrands = brands;

        // If brands exist delete it
        const removedData = newBrands.filter( ( filterItem: dataTypes ) => {
            if( filterItem.id == value ){
                return filterItem;
            }
        });

        if( removedData.length !== 0 ) {

             let tempData = newBrands.filter( ( el: dataTypes ) => {
                if( el.id != value ) {
                    return el;
                } 
            });

            setBrands( tempData );
            setSelectedId( JSON.stringify( tempData ) );

        } else {

            // If not listed
            const selectData = Data.filter( (item) => {
                if( item.id == value ){ return item;}
            });
    
            newBrands.push( selectData[0] );
            setBrands( newBrands );
            setSelectedId( JSON.stringify( newBrands ) );
        
        }   

    }

    const handleNext = () => {
        router.push('/(profile)/finish.screen');
    }

    const renderItem = ({ item }: { item: dataTypes }) => {

        let currentActive = false;

        brands.filter( ( data: any ) => {
            if ( data.id == item.id ){
                currentActive = true;
            }
        })

        return (
            <Item 
                onPress={ ()=> handleBrand( item.id ) }
                item={item} 
                id={ item.id } active={ currentActive } title={ item.brand_name } logo={ item.image } />
        )
    }

    return (
        <SafeAreaView style={ Styles.safearea }>
            <View style={ Styles.container }>

                <View style={ Styles.header_container }>
                    <Text style={ Styles.header }>What's your favourite brands</Text>
                    <Text>Let us know about your self</Text>
                </View>

                <View style={ Styles.body_container }>
                    <View style={ Styles.contentWrapper }>
                        
                        <FlatList
                            numColumns={3}
                            data={ Data }
                            renderItem={ renderItem }
                            extraData={ brands }
                        />

                    </View>
                    <View style={ Styles.buttonWrapper }>
                        <Button title="Done" onPress={ handleNext} />
                    </View>
                </View>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    safearea: {
        flex: 1,
        backgroundColor: Colors.light.innerBackground
    },
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'flex-start',
        padding: Const.padding.appInnerPadding,
    },
    header_container: {
        width: '100%',
        height: 150,
        alignItems: 'center',
        justifyContent: 'center',
    },
    body_container: {
        flex: 1,
        width: '100%'
    },
    contentWrapper: {
        flex: 8
    },
    buttonWrapper: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center'
    },
    box: {
        width: '48%',
        height: 50,
        lineHeight: 50,
        textAlign: 'center',
        borderRadius: 10,
        borderWidth: 1,
        borderColor: '#444',
        fontFamily: 'Montserrat-Medium',
        fontSize: 16,
        alignItems: 'center',
        justifyContent: 'center'
    },
    boxActive: {
        backgroundColor: '#333',
        color: '#fff',
        fontFamily: 'Montserrat-Bold',
    },
    header: {
        width: '100%',
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginBottom: 5,
        textAlign: 'center',
    },
    subHeader: {
        width: '100%',
        fontFamily: 'Montserrat-Medium',
        fontSize: 18,
        textAlign: 'center',
        color: '#444'
    },
    brand: {
        width: 100,
        height: 100,
        backgroundColor: '#fff',
        borderColor: '#aaa',
        borderWidth: 1,
        borderRadius: 120,
        alignItems: 'center',
        justifyContent: 'center',
        margin: 10,
        overflow: 'hidden'
    }
});